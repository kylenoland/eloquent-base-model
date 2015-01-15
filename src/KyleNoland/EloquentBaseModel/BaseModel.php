<?php

use Eloquent;

class BaseModel extends Eloquent
{
	/**
	 * Models that always get eagerly loaded with this model
	 *
	 * @var array
	 */
	protected $with = array();


	/**
	 * The attributes excluded from the model's JSON form
	 *
	 * @var array
	 */
	protected $hidden = array();


	/**
	 * The attributes that cannot be mass assigned
	 *
	 * @var array
	 */
	protected $guarded = array('id', 'created_at', 'updated_at', 'deleted_at');


	/**
	 * The attributes that can be mass assigned
	 *
	 * @var array
	 */
	protected $fillable = array();


	/**
	 * Numeric attributes
	 *
	 * @var array
	 */
	protected $numericAttributes = array();


	/**
	 * DateTime attributes
	 *
	 * @var array
	 */
	protected $dateAttributes = array();


	/**
	 * Currency attributes
	 *
	 * @var array
	 */
	protected $currencyAttributes = array();


	/**
	 * Get the created_at attribute
	 *
	 * @param string $format
	 *
	 * @return bool|string
	 */
	public function getCreatedAt($format = 'm/d/Y')
	{
		if( ! is_null($this->created_at))
		{
			return format_date($this->created_at, $format);
		}
	}


	/**
	 * Get the currency attributes array
	 *
	 * @return array
	 */
	public function getCurrencyAttributes()
	{
		return $this->currencyAttributes;
	}


	/**
	 * Get the date attributes array
	 *
	 * @return array
	 */
	public function getDateAttributes()
	{
		return $this->dateAttributes;
	}


	/**
	 * Get the deleted_at attribute
	 *
	 * @param string $format
	 *
	 * @return bool|string
	 */
	public function getDeletedAt($format = 'm/d/Y')
	{
		if( ! is_null($this->deleted_at))
		{
			return format_date($this->deleted_at, $format);
		}
	}


	/**
	 * Get the updated_at attribute
	 *
	 * @param string $format
	 *
	 * @return bool|string
	 */
	public function getUpdatedAt($format = 'm/d/Y')
	{
		if( ! is_null($this->updated_at))
		{
			return format_date($this->updated_at, $format);
		}
	}


	/**
	 * Get the numeric attributes array
	 *
	 * @return array
	 */
	public function getNumericAttributes()
	{
		return $this->numericAttributes;
	}


	/**
	 * Does the model have any currency attributes
	 *
	 * @return bool
	 */
	public function hasCurrencyAttributes()
	{
		return ! empty($this->currencyAttributes);
	}


	/**
	 * Does the model have any date attributes
	 *
	 * @return bool
	 */
	public function hasDateAttributes()
	{
		return ! empty($this->dateAttributes);
	}


	/**
	 * Does the model have any numeric attributes
	 *
	 * @return bool
	 */
	public function hasNumericAttributes()
	{
		return ! empty($this->numericAttributes);
	}
}