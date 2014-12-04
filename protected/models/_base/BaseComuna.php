<?php

/**
 * This is the model base class for the table "comuna".
 * DO NOT MODIFY THIS FILE! It is automatically generated by AweCrud.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Comuna".
 *
 * Columns in table "comuna" available as properties of the model,
 * followed by relations of table "comuna" available as properties of the model.
 *
 * @property integer $id_comuna
 * @property string $nombre_comuna
 * @property integer $id_provincia
 *
 * @property Provincia $idProvincia
 * @property Persona[] $personas
 */
abstract class BaseComuna extends AweActiveRecord {

    public static function model($className=__CLASS__) {
        return parent::model($className);
    }

    public function tableName() {
        return 'comuna';
    }

    public static function representingColumn() {
        return 'nombre_comuna';
    }

    public function rules() {
        return array(
            array('nombre_comuna, id_provincia', 'required'),
            array('id_provincia', 'numerical', 'integerOnly'=>true),
            array('nombre_comuna', 'length', 'max'=>64),
            array('id_comuna, nombre_comuna, id_provincia', 'safe', 'on'=>'search'),
        );
    }

    public function relations() {
        return array(
            'idProvincia' => array(self::BELONGS_TO, 'Provincia', 'id_provincia'),
            'personas' => array(self::HAS_MANY, 'Persona', 'id_comuna'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
                'id_comuna' => Yii::t('app', 'Id Comuna'),
                'nombre_comuna' => Yii::t('app', 'Nombre Comuna'),
                'id_provincia' => Yii::t('app', 'Id Provincia'),
                'idProvincia' => null,
                'personas' => null,
        );
    }

    public function search() {
        $criteria = new CDbCriteria;

        $criteria->compare('id_comuna', $this->id_comuna);
        $criteria->compare('nombre_comuna', $this->nombre_comuna, true);
        $criteria->compare('id_provincia', $this->id_provincia);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    public function behaviors() {
        return array_merge(array(
        ), parent::behaviors());
    }
}