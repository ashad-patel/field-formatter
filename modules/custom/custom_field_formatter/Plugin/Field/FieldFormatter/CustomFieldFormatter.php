<?php
/**
 * @file
 * Contains \modules\custom\custom_field_formatter\Plugin\Field\FieldFormatter\CustomFieldFormatter.
 */
 
 namespace custom\custom_field_formatter\Plugin\Field\FieldFormatter;
 
 use Drupal\Core\Field\FormatterBase;
 use Drupal\Core\Field\FieldItemListInterface;
 
 /**
 * Plugin implementation of the 'youtube_link' formatter.
 *
 * @FieldFormatter(
 *   id = "youtube_link",
 *   label = @Translation("YouTube Formatter"),
 *   field_types = {
 *     "link"
 *   }
 * )
 */
class CustomFieldFormatter extends FormatterBase {
/**
 * {@inheritdoc}
 */
public function viewElements(FieldItemListInterface $items) {
	echo $items;exit;
  $elements = array();

  foreach ($items as $delta => $item) {
    $url = $item->url;
    $elements[$delta] = array(
      '#theme' => 'youtube_link_formatter',
      '#url' => $url,
    );
  }

  return $elements;
}
	}