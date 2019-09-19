<?php
/**
 * @file
 * Contains Drupal\file_handler\Plugin\Filter\FileHandler
 */

namespace Drupal\file_handler\Plugin\Filter;

use Drupal\filter\FilterProcessResult;
use Drupal\filter\Plugin\FilterBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Provides a filter to convert /sites/default/files/private to /system/files
 * https://www.lullabot.com/articles/creating-a-custom-filter-in-drupal-8
 *
 * @Filter(
 *   id = "filter_private_files_output_filter",
 *   title = @Translation("Private Files Output Filter"),
 *   description = @Translation("Provides a filter to convert /sites/default/files/private to /system/files"),
 *   type = Drupal\filter\Plugin\FilterInterface::TYPE_MARKUP_LANGUAGE,
 * )
 */
class FilterPrivateFiles extends FilterBase {
  /**
   * {@inheritdoc}
   */
  public function process($text, $langcode) {
    $new_text = str_replace('sites/systemsbiology.ucsd.edu/files/Attachments/Images/internal', '/system/files', $text);
    $result = new FilterProcessResult($new_text);
    return $result;
  }

}
