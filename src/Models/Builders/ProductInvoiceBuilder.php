<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use FortisAPILib\Models\ProductInvoice;

/**
 * Builder for model ProductInvoice
 *
 * @see ProductInvoice
 */
class ProductInvoiceBuilder
{
    /**
     * @var ProductInvoice
     */
    private $instance;

    private function __construct(ProductInvoice $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Product Invoice Builder object.
     */
    public static function init(): self
    {
        return new self(new ProductInvoice());
    }

    /**
     * Sets title field.
     *
     * @param string|null $value
     */
    public function title(?string $value): self
    {
        $this->instance->setTitle($value);
        return $this;
    }

    /**
     * Sets quote number format field.
     *
     * @param string|null $value
     */
    public function quoteNumberFormat(?string $value): self
    {
        $this->instance->setQuoteNumberFormat($value);
        return $this;
    }

    /**
     * Unsets quote number format field.
     */
    public function unsetQuoteNumberFormat(): self
    {
        $this->instance->unsetQuoteNumberFormat();
        return $this;
    }

    /**
     * Sets quote number start field.
     *
     * @param float|null $value
     */
    public function quoteNumberStart(?float $value): self
    {
        $this->instance->setQuoteNumberStart($value);
        return $this;
    }

    /**
     * Unsets quote number start field.
     */
    public function unsetQuoteNumberStart(): self
    {
        $this->instance->unsetQuoteNumberStart();
        return $this;
    }

    /**
     * Sets quote number increment field.
     *
     * @param float|null $value
     */
    public function quoteNumberIncrement(?float $value): self
    {
        $this->instance->setQuoteNumberIncrement($value);
        return $this;
    }

    /**
     * Unsets quote number increment field.
     */
    public function unsetQuoteNumberIncrement(): self
    {
        $this->instance->unsetQuoteNumberIncrement();
        return $this;
    }

    /**
     * Sets quote number current field.
     *
     * @param float|null $value
     */
    public function quoteNumberCurrent(?float $value): self
    {
        $this->instance->setQuoteNumberCurrent($value);
        return $this;
    }

    /**
     * Unsets quote number current field.
     */
    public function unsetQuoteNumberCurrent(): self
    {
        $this->instance->unsetQuoteNumberCurrent();
        return $this;
    }

    /**
     * Sets invoice number format field.
     *
     * @param string|null $value
     */
    public function invoiceNumberFormat(?string $value): self
    {
        $this->instance->setInvoiceNumberFormat($value);
        return $this;
    }

    /**
     * Unsets invoice number format field.
     */
    public function unsetInvoiceNumberFormat(): self
    {
        $this->instance->unsetInvoiceNumberFormat();
        return $this;
    }

    /**
     * Sets invoice number start field.
     *
     * @param float|null $value
     */
    public function invoiceNumberStart(?float $value): self
    {
        $this->instance->setInvoiceNumberStart($value);
        return $this;
    }

    /**
     * Unsets invoice number start field.
     */
    public function unsetInvoiceNumberStart(): self
    {
        $this->instance->unsetInvoiceNumberStart();
        return $this;
    }

    /**
     * Sets invoice number increment field.
     *
     * @param float|null $value
     */
    public function invoiceNumberIncrement(?float $value): self
    {
        $this->instance->setInvoiceNumberIncrement($value);
        return $this;
    }

    /**
     * Unsets invoice number increment field.
     */
    public function unsetInvoiceNumberIncrement(): self
    {
        $this->instance->unsetInvoiceNumberIncrement();
        return $this;
    }

    /**
     * Sets invoice number current field.
     *
     * @param float|null $value
     */
    public function invoiceNumberCurrent(?float $value): self
    {
        $this->instance->setInvoiceNumberCurrent($value);
        return $this;
    }

    /**
     * Unsets invoice number current field.
     */
    public function unsetInvoiceNumberCurrent(): self
    {
        $this->instance->unsetInvoiceNumberCurrent();
        return $this;
    }

    /**
     * Sets tax rate field.
     *
     * @param float|null $value
     */
    public function taxRate(?float $value): self
    {
        $this->instance->setTaxRate($value);
        return $this;
    }

    /**
     * Sets tax fee field.
     *
     * @param int|null $value
     */
    public function taxFee(?int $value): self
    {
        $this->instance->setTaxFee($value);
        return $this;
    }

    /**
     * Unsets tax fee field.
     */
    public function unsetTaxFee(): self
    {
        $this->instance->unsetTaxFee();
        return $this;
    }

    /**
     * Sets monthly fee field.
     *
     * @param int|null $value
     */
    public function monthlyFee(?int $value): self
    {
        $this->instance->setMonthlyFee($value);
        return $this;
    }

    /**
     * Unsets monthly fee field.
     */
    public function unsetMonthlyFee(): self
    {
        $this->instance->unsetMonthlyFee();
        return $this;
    }

    /**
     * Sets per invoice fee field.
     *
     * @param int|null $value
     */
    public function perInvoiceFee(?int $value): self
    {
        $this->instance->setPerInvoiceFee($value);
        return $this;
    }

    /**
     * Sets per quote fee field.
     *
     * @param int|null $value
     */
    public function perQuoteFee(?int $value): self
    {
        $this->instance->setPerQuoteFee($value);
        return $this;
    }

    /**
     * Sets require pay in full field.
     *
     * @param bool|null $value
     */
    public function requirePayInFull(?bool $value): self
    {
        $this->instance->setRequirePayInFull($value);
        return $this;
    }

    /**
     * Sets selectable field.
     *
     * @param float|null $value
     */
    public function selectable(?float $value): self
    {
        $this->instance->setSelectable($value);
        return $this;
    }

    /**
     * Unsets selectable field.
     */
    public function unsetSelectable(): self
    {
        $this->instance->unsetSelectable();
        return $this;
    }

    /**
     * Sets reportable field.
     *
     * @param float|null $value
     */
    public function reportable(?float $value): self
    {
        $this->instance->setReportable($value);
        return $this;
    }

    /**
     * Unsets reportable field.
     */
    public function unsetReportable(): self
    {
        $this->instance->unsetReportable();
        return $this;
    }

    /**
     * Sets portfolio id field.
     *
     * @param string|null $value
     */
    public function portfolioId(?string $value): self
    {
        $this->instance->setPortfolioId($value);
        return $this;
    }

    /**
     * Unsets portfolio id field.
     */
    public function unsetPortfolioId(): self
    {
        $this->instance->unsetPortfolioId();
        return $this;
    }

    /**
     * Sets location id field.
     *
     * @param string|null $value
     */
    public function locationId(?string $value): self
    {
        $this->instance->setLocationId($value);
        return $this;
    }

    /**
     * Sets id field.
     *
     * @param string|null $value
     */
    public function id(?string $value): self
    {
        $this->instance->setId($value);
        return $this;
    }

    /**
     * Sets created ts field.
     *
     * @param int|null $value
     */
    public function createdTs(?int $value): self
    {
        $this->instance->setCreatedTs($value);
        return $this;
    }

    /**
     * Sets modified ts field.
     *
     * @param int|null $value
     */
    public function modifiedTs(?int $value): self
    {
        $this->instance->setModifiedTs($value);
        return $this;
    }

    /**
     * Sets created user id field.
     *
     * @param string|null $value
     */
    public function createdUserId(?string $value): self
    {
        $this->instance->setCreatedUserId($value);
        return $this;
    }

    /**
     * Unsets created user id field.
     */
    public function unsetCreatedUserId(): self
    {
        $this->instance->unsetCreatedUserId();
        return $this;
    }

    /**
     * Sets modified user id field.
     *
     * @param string|null $value
     */
    public function modifiedUserId(?string $value): self
    {
        $this->instance->setModifiedUserId($value);
        return $this;
    }

    /**
     * Unsets modified user id field.
     */
    public function unsetModifiedUserId(): self
    {
        $this->instance->unsetModifiedUserId();
        return $this;
    }

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property.
     * @param mixed $value Value of property.
     */
    public function additionalProperty(string $name, $value): self
    {
        $this->instance->addAdditionalProperty($name, $value);
        return $this;
    }

    /**
     * Initializes a new Product Invoice object.
     */
    public function build(): ProductInvoice
    {
        return CoreHelper::clone($this->instance);
    }
}
