<?php
/**
 * OpenPayU
 *
 * @copyright  Copyright (c) 2012 PayU
 */
interface OpenPayU_HttpProtocol
{
    public static function doRequest($requestType, $pathUrl, $fieldsList, $posId, $signatureKey);
}
