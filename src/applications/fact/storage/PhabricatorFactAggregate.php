<?php

final class PhabricatorFactAggregate extends PhabricatorFactDAO {

  protected $factType;
  protected $objectPHID;
  protected $valueX;

  public function getConfiguration() {
    return array(
      self::CONFIG_COLUMN_SCHEMA => array(
        'id' => 'id64',
        'factType' => 'text32',
        'valueX' => 'uint64',
      ),
      self::CONFIG_KEY_SCHEMA => array(
        'factType' => array(
          'columns' => array('factType', 'objectPHID'),
          'unique' => true,
        ),
      ),
    ) + parent::getConfiguration();
  }

}
