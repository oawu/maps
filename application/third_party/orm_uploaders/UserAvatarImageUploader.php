<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @author      OA Wu <comdan66@gmail.com>
 * @copyright   Copyright (c) 2015 OA Wu Design
 */

class UserAvatarImageUploader extends OrmImageUploader {

  public function getVersions () {
    return array (
        '' => array (),
        '40x40c' => array ('adaptiveResizeQuadrant', 40, 40, 'c'),
        '100x100c' => array ('adaptiveResizeQuadrant', 100, 100, 'c'),
      );
  }
}