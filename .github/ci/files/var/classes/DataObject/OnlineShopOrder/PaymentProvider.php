<?php

namespace Pimcore\Model\DataObject\OnlineShopOrder;

use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;

class PaymentProvider extends \Pimcore\Model\DataObject\Objectbrick {

protected $brickGetters = ['PaymentProviderHobex'];


protected $PaymentProviderHobex = null;

/**
* @return \Pimcore\Model\DataObject\Objectbrick\Data\PaymentProviderHobex|null
*/
public function getPaymentProviderHobex(bool $includeDeletedBricks = false)
{
	if(!$includeDeletedBricks &&
		isset($this->PaymentProviderHobex) &&
		$this->PaymentProviderHobex->getDoDelete()) {
			return null;
	}
	return $this->PaymentProviderHobex;
}

/**
* @param \Pimcore\Model\DataObject\Objectbrick\Data\PaymentProviderHobex $PaymentProviderHobex
* @return $this
*/
public function setPaymentProviderHobex(\Pimcore\Model\DataObject\Objectbrick\Data\PaymentProviderHobex $PaymentProviderHobex): static
{
	$this->PaymentProviderHobex = $PaymentProviderHobex;
	return $this;
}

}

