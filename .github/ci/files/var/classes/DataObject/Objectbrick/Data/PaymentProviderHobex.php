<?php

/**
 * Fields Summary:
 * - configurationKey [input]
 * - auth_extId [input]
 * - auth_checkoutId [input]
 * - auth_transactionId [input]
 * - auth_paymentType [input]
 * - auth_paymentState [input]
 * - auth_amount [input]
 * - auth_currency [input]
 */

namespace Pimcore\Model\DataObject\Objectbrick\Data;

use Pimcore\Model\DataObject;
use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;
use Pimcore\Model\DataObject\PreGetValueHookInterface;


class PaymentProviderHobex extends DataObject\Objectbrick\Data\AbstractData
{
public const FIELD_CONFIGURATION_KEY = 'configurationKey';
public const FIELD_AUTH_EXT_ID = 'auth_extId';
public const FIELD_AUTH_CHECKOUT_ID = 'auth_checkoutId';
public const FIELD_AUTH_TRANSACTION_ID = 'auth_transactionId';
public const FIELD_AUTH_PAYMENT_TYPE = 'auth_paymentType';
public const FIELD_AUTH_PAYMENT_STATE = 'auth_paymentState';
public const FIELD_AUTH_AMOUNT = 'auth_amount';
public const FIELD_AUTH_CURRENCY = 'auth_currency';

protected string $type = "PaymentProviderHobex";
protected $configurationKey;
protected $auth_extId;
protected $auth_checkoutId;
protected $auth_transactionId;
protected $auth_paymentType;
protected $auth_paymentState;
protected $auth_amount;
protected $auth_currency;


/**
* PaymentProviderHobex constructor.
* @param DataObject\Concrete $object
*/
public function __construct(DataObject\Concrete $object)
{
	parent::__construct($object);
	$this->markFieldDirty("_self");
}


/**
* Get configurationKey - Configuration Key
* @return string|null
*/
public function getConfigurationKey(): ?string
{
	$data = $this->configurationKey;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("configurationKey")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("configurationKey");
		} catch (InheritanceParentNotFoundException $e) {
			// no data from parent available, continue ...
		}
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set configurationKey - Configuration Key
* @param string|null $configurationKey
* @return $this
*/
public function setConfigurationKey (?string $configurationKey): static
{
	$this->configurationKey = $configurationKey;

	return $this;
}

/**
* Get auth_extId - External ID
* @return string|null
*/
public function getAuth_extId(): ?string
{
	$data = $this->auth_extId;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("auth_extId")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("auth_extId");
		} catch (InheritanceParentNotFoundException $e) {
			// no data from parent available, continue ...
		}
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set auth_extId - External ID
* @param string|null $auth_extId
* @return $this
*/
public function setAuth_extId (?string $auth_extId): static
{
	$this->auth_extId = $auth_extId;

	return $this;
}

/**
* Get auth_checkoutId - Checkout ID
* @return string|null
*/
public function getAuth_checkoutId(): ?string
{
	$data = $this->auth_checkoutId;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("auth_checkoutId")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("auth_checkoutId");
		} catch (InheritanceParentNotFoundException $e) {
			// no data from parent available, continue ...
		}
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set auth_checkoutId - Checkout ID
* @param string|null $auth_checkoutId
* @return $this
*/
public function setAuth_checkoutId (?string $auth_checkoutId): static
{
	$this->auth_checkoutId = $auth_checkoutId;

	return $this;
}

/**
* Get auth_transactionId - Transaction ID
* @return string|null
*/
public function getAuth_transactionId(): ?string
{
	$data = $this->auth_transactionId;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("auth_transactionId")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("auth_transactionId");
		} catch (InheritanceParentNotFoundException $e) {
			// no data from parent available, continue ...
		}
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set auth_transactionId - Transaction ID
* @param string|null $auth_transactionId
* @return $this
*/
public function setAuth_transactionId (?string $auth_transactionId): static
{
	$this->auth_transactionId = $auth_transactionId;

	return $this;
}

/**
* Get auth_paymentType - Payment Type
* @return string|null
*/
public function getAuth_paymentType(): ?string
{
	$data = $this->auth_paymentType;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("auth_paymentType")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("auth_paymentType");
		} catch (InheritanceParentNotFoundException $e) {
			// no data from parent available, continue ...
		}
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set auth_paymentType - Payment Type
* @param string|null $auth_paymentType
* @return $this
*/
public function setAuth_paymentType (?string $auth_paymentType): static
{
	$this->auth_paymentType = $auth_paymentType;

	return $this;
}

/**
* Get auth_paymentState - Payment State
* @return string|null
*/
public function getAuth_paymentState(): ?string
{
	$data = $this->auth_paymentState;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("auth_paymentState")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("auth_paymentState");
		} catch (InheritanceParentNotFoundException $e) {
			// no data from parent available, continue ...
		}
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set auth_paymentState - Payment State
* @param string|null $auth_paymentState
* @return $this
*/
public function setAuth_paymentState (?string $auth_paymentState): static
{
	$this->auth_paymentState = $auth_paymentState;

	return $this;
}

/**
* Get auth_amount - Amount
* @return string|null
*/
public function getAuth_amount(): ?string
{
	$data = $this->auth_amount;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("auth_amount")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("auth_amount");
		} catch (InheritanceParentNotFoundException $e) {
			// no data from parent available, continue ...
		}
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set auth_amount - Amount
* @param string|null $auth_amount
* @return $this
*/
public function setAuth_amount (?string $auth_amount): static
{
	$this->auth_amount = $auth_amount;

	return $this;
}

/**
* Get auth_currency - Currency
* @return string|null
*/
public function getAuth_currency(): ?string
{
	$data = $this->auth_currency;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("auth_currency")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("auth_currency");
		} catch (InheritanceParentNotFoundException $e) {
			// no data from parent available, continue ...
		}
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set auth_currency - Currency
* @param string|null $auth_currency
* @return $this
*/
public function setAuth_currency (?string $auth_currency): static
{
	$this->auth_currency = $auth_currency;

	return $this;
}

}

