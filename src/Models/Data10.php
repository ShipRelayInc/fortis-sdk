<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models;

use FortisAPILib\ApiHelper;
use stdClass;

class Data10 implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $id;

    /**
     * @var int|null
     */
    private $createdTs;

    /**
     * @var int|null
     */
    private $modifiedTs;

    /**
     * @var array
     */
    private $accountNumber = [];

    /**
     * @var Address1|null
     */
    private $address;

    /**
     * @var array
     */
    private $brandingDomainId = [];

    /**
     * @var bool|null
     */
    private $contactEmailTrxReceiptDefault;

    /**
     * @var array
     */
    private $defaultAch = [];

    /**
     * @var array
     */
    private $defaultCc = [];

    /**
     * @var array
     */
    private $emailReplyTo = [];

    /**
     * @var array
     */
    private $fax = [];

    /**
     * @var array
     */
    private $locationApiId = [];

    /**
     * @var array
     */
    private $locationApiKey = [];

    /**
     * @var array
     */
    private $locationC1 = [];

    /**
     * @var array
     */
    private $locationC2 = [];

    /**
     * @var array
     */
    private $locationC3 = [];

    /**
     * @var string|null
     */
    private $name;

    /**
     * @var array
     */
    private $officePhone = [];

    /**
     * @var array
     */
    private $officeExtPhone = [];

    /**
     * @var array
     */
    private $tz = [];

    /**
     * @var string|null
     */
    private $parentId;

    /**
     * @var bool|null
     */
    private $showContactNotes;

    /**
     * @var bool|null
     */
    private $showContactFiles;

    /**
     * @var array
     */
    private $createdUserId = [];

    /**
     * @var array
     */
    private $locationType = [];

    /**
     * @var array
     */
    private $parentName = [];

    /**
     * @var array
     */
    private $ticketHashKey = [];

    /**
     * @var Parent3|null
     */
    private $parent;

    /**
     * @var User9[]|null
     */
    private $users;

    /**
     * @var bool|null
     */
    private $isDeletable;

    /**
     * @var Terminal2[]|null
     */
    private $terminals;

    /**
     * @var BrandingDomain1|null
     */
    private $brandingDomain;

    /**
     * @var ProductInvoice|null
     */
    private $productInvoice;

    /**
     * @var ProductFile1[]|null
     */
    private $productFiles;

    /**
     * @var CreatedUser|null
     */
    private $createdUser;

    /**
     * @var Changelog[]|null
     */
    private $changelogs;

    /**
     * @var ProductTransaction1[]|null
     */
    private $productTransactions;

    /**
     * @var TerminalRouter[]|null
     */
    private $terminalRouters;

    /**
     * @var DeveloperCompany|null
     */
    private $developerCompany;

    /**
     * @var array
     */
    private $developerCompanyId = [];

    /**
     * @var Helppage[]|null
     */
    private $helppages;

    /**
     * @var QuickInvoiceSetting|null
     */
    private $quickInvoiceSetting;

    /**
     * @var LocationBillingAccount[]|null
     */
    private $locationBillingAccounts;

    /**
     * @var Marketplace[]|null
     */
    private $marketplaces;

    /**
     * @var Locationmarketplace[]|null
     */
    private $locationmarketplaces;

    /**
     * @var Addon[]|null
     */
    private $addons;

    /**
     * Returns Id.
     * Location ID
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Sets Id.
     * Location ID
     *
     * @maps id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Created Ts.
     * Created Time Stamp
     */
    public function getCreatedTs(): ?int
    {
        return $this->createdTs;
    }

    /**
     * Sets Created Ts.
     * Created Time Stamp
     *
     * @maps created_ts
     */
    public function setCreatedTs(?int $createdTs): void
    {
        $this->createdTs = $createdTs;
    }

    /**
     * Returns Modified Ts.
     * Modified Time Stamp
     */
    public function getModifiedTs(): ?int
    {
        return $this->modifiedTs;
    }

    /**
     * Sets Modified Ts.
     * Modified Time Stamp
     *
     * @maps modified_ts
     */
    public function setModifiedTs(?int $modifiedTs): void
    {
        $this->modifiedTs = $modifiedTs;
    }

    /**
     * Returns Account Number.
     * Account number
     */
    public function getAccountNumber(): ?string
    {
        if (count($this->accountNumber) == 0) {
            return null;
        }
        return $this->accountNumber['value'];
    }

    /**
     * Sets Account Number.
     * Account number
     *
     * @maps account_number
     */
    public function setAccountNumber(?string $accountNumber): void
    {
        $this->accountNumber['value'] = $accountNumber;
    }

    /**
     * Unsets Account Number.
     * Account number
     */
    public function unsetAccountNumber(): void
    {
        $this->accountNumber = [];
    }

    /**
     * Returns Address.
     * Address
     */
    public function getAddress(): ?Address1
    {
        return $this->address;
    }

    /**
     * Sets Address.
     * Address
     *
     * @maps address
     */
    public function setAddress(?Address1 $address): void
    {
        $this->address = $address;
    }

    /**
     * Returns Branding Domain Id.
     * GUID for Branding Domain
     */
    public function getBrandingDomainId(): ?string
    {
        if (count($this->brandingDomainId) == 0) {
            return null;
        }
        return $this->brandingDomainId['value'];
    }

    /**
     * Sets Branding Domain Id.
     * GUID for Branding Domain
     *
     * @maps branding_domain_id
     */
    public function setBrandingDomainId(?string $brandingDomainId): void
    {
        $this->brandingDomainId['value'] = $brandingDomainId;
    }

    /**
     * Unsets Branding Domain Id.
     * GUID for Branding Domain
     */
    public function unsetBrandingDomainId(): void
    {
        $this->brandingDomainId = [];
    }

    /**
     * Returns Contact Email Trx Receipt Default.
     * If true, will email contact receipt for any transaction
     */
    public function getContactEmailTrxReceiptDefault(): ?bool
    {
        return $this->contactEmailTrxReceiptDefault;
    }

    /**
     * Sets Contact Email Trx Receipt Default.
     * If true, will email contact receipt for any transaction
     *
     * @maps contact_email_trx_receipt_default
     */
    public function setContactEmailTrxReceiptDefault(?bool $contactEmailTrxReceiptDefault): void
    {
        $this->contactEmailTrxReceiptDefault = $contactEmailTrxReceiptDefault;
    }

    /**
     * Returns Default Ach.
     * GUID for Location's default ACH Product Transaction
     */
    public function getDefaultAch(): ?string
    {
        if (count($this->defaultAch) == 0) {
            return null;
        }
        return $this->defaultAch['value'];
    }

    /**
     * Sets Default Ach.
     * GUID for Location's default ACH Product Transaction
     *
     * @maps default_ach
     */
    public function setDefaultAch(?string $defaultAch): void
    {
        $this->defaultAch['value'] = $defaultAch;
    }

    /**
     * Unsets Default Ach.
     * GUID for Location's default ACH Product Transaction
     */
    public function unsetDefaultAch(): void
    {
        $this->defaultAch = [];
    }

    /**
     * Returns Default Cc.
     * GUID for Location's default CC Product Transaction
     */
    public function getDefaultCc(): ?string
    {
        if (count($this->defaultCc) == 0) {
            return null;
        }
        return $this->defaultCc['value'];
    }

    /**
     * Sets Default Cc.
     * GUID for Location's default CC Product Transaction
     *
     * @maps default_cc
     */
    public function setDefaultCc(?string $defaultCc): void
    {
        $this->defaultCc['value'] = $defaultCc;
    }

    /**
     * Unsets Default Cc.
     * GUID for Location's default CC Product Transaction
     */
    public function unsetDefaultCc(): void
    {
        $this->defaultCc = [];
    }

    /**
     * Returns Email Reply To.
     * Used as from email address when sending various notifications
     */
    public function getEmailReplyTo(): ?string
    {
        if (count($this->emailReplyTo) == 0) {
            return null;
        }
        return $this->emailReplyTo['value'];
    }

    /**
     * Sets Email Reply To.
     * Used as from email address when sending various notifications
     *
     * @maps email_reply_to
     */
    public function setEmailReplyTo(?string $emailReplyTo): void
    {
        $this->emailReplyTo['value'] = $emailReplyTo;
    }

    /**
     * Unsets Email Reply To.
     * Used as from email address when sending various notifications
     */
    public function unsetEmailReplyTo(): void
    {
        $this->emailReplyTo = [];
    }

    /**
     * Returns Fax.
     * Fax number
     */
    public function getFax(): ?string
    {
        if (count($this->fax) == 0) {
            return null;
        }
        return $this->fax['value'];
    }

    /**
     * Sets Fax.
     * Fax number
     *
     * @maps fax
     */
    public function setFax(?string $fax): void
    {
        $this->fax['value'] = $fax;
    }

    /**
     * Unsets Fax.
     * Fax number
     */
    public function unsetFax(): void
    {
        $this->fax = [];
    }

    /**
     * Returns Location Api Id.
     * Location api ID
     */
    public function getLocationApiId(): ?string
    {
        if (count($this->locationApiId) == 0) {
            return null;
        }
        return $this->locationApiId['value'];
    }

    /**
     * Sets Location Api Id.
     * Location api ID
     *
     * @maps location_api_id
     */
    public function setLocationApiId(?string $locationApiId): void
    {
        $this->locationApiId['value'] = $locationApiId;
    }

    /**
     * Unsets Location Api Id.
     * Location api ID
     */
    public function unsetLocationApiId(): void
    {
        $this->locationApiId = [];
    }

    /**
     * Returns Location Api Key.
     * Location api key
     */
    public function getLocationApiKey(): ?string
    {
        if (count($this->locationApiKey) == 0) {
            return null;
        }
        return $this->locationApiKey['value'];
    }

    /**
     * Sets Location Api Key.
     * Location api key
     *
     * @maps location_api_key
     */
    public function setLocationApiKey(?string $locationApiKey): void
    {
        $this->locationApiKey['value'] = $locationApiKey;
    }

    /**
     * Unsets Location Api Key.
     * Location api key
     */
    public function unsetLocationApiKey(): void
    {
        $this->locationApiKey = [];
    }

    /**
     * Returns Location C1.
     * Can be used to store custom information for location.
     */
    public function getLocationC1(): ?string
    {
        if (count($this->locationC1) == 0) {
            return null;
        }
        return $this->locationC1['value'];
    }

    /**
     * Sets Location C1.
     * Can be used to store custom information for location.
     *
     * @maps location_c1
     */
    public function setLocationC1(?string $locationC1): void
    {
        $this->locationC1['value'] = $locationC1;
    }

    /**
     * Unsets Location C1.
     * Can be used to store custom information for location.
     */
    public function unsetLocationC1(): void
    {
        $this->locationC1 = [];
    }

    /**
     * Returns Location C2.
     * Can be used to store custom information for location.
     */
    public function getLocationC2(): ?string
    {
        if (count($this->locationC2) == 0) {
            return null;
        }
        return $this->locationC2['value'];
    }

    /**
     * Sets Location C2.
     * Can be used to store custom information for location.
     *
     * @maps location_c2
     */
    public function setLocationC2(?string $locationC2): void
    {
        $this->locationC2['value'] = $locationC2;
    }

    /**
     * Unsets Location C2.
     * Can be used to store custom information for location.
     */
    public function unsetLocationC2(): void
    {
        $this->locationC2 = [];
    }

    /**
     * Returns Location C3.
     * Can be used to store custom information for location.
     */
    public function getLocationC3(): ?string
    {
        if (count($this->locationC3) == 0) {
            return null;
        }
        return $this->locationC3['value'];
    }

    /**
     * Sets Location C3.
     * Can be used to store custom information for location.
     *
     * @maps location_c3
     */
    public function setLocationC3(?string $locationC3): void
    {
        $this->locationC3['value'] = $locationC3;
    }

    /**
     * Unsets Location C3.
     * Can be used to store custom information for location.
     */
    public function unsetLocationC3(): void
    {
        $this->locationC3 = [];
    }

    /**
     * Returns Name.
     * Name of the company
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Sets Name.
     * Name of the company
     *
     * @maps name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * Returns Office Phone.
     * Office phone number
     */
    public function getOfficePhone(): ?string
    {
        if (count($this->officePhone) == 0) {
            return null;
        }
        return $this->officePhone['value'];
    }

    /**
     * Sets Office Phone.
     * Office phone number
     *
     * @maps office_phone
     */
    public function setOfficePhone(?string $officePhone): void
    {
        $this->officePhone['value'] = $officePhone;
    }

    /**
     * Unsets Office Phone.
     * Office phone number
     */
    public function unsetOfficePhone(): void
    {
        $this->officePhone = [];
    }

    /**
     * Returns Office Ext Phone.
     * Office phone extension number
     */
    public function getOfficeExtPhone(): ?string
    {
        if (count($this->officeExtPhone) == 0) {
            return null;
        }
        return $this->officeExtPhone['value'];
    }

    /**
     * Sets Office Ext Phone.
     * Office phone extension number
     *
     * @maps office_ext_phone
     */
    public function setOfficeExtPhone(?string $officeExtPhone): void
    {
        $this->officeExtPhone['value'] = $officeExtPhone;
    }

    /**
     * Unsets Office Ext Phone.
     * Office phone extension number
     */
    public function unsetOfficeExtPhone(): void
    {
        $this->officeExtPhone = [];
    }

    /**
     * Returns Tz.
     * Time zone
     */
    public function getTz(): ?string
    {
        if (count($this->tz) == 0) {
            return null;
        }
        return $this->tz['value'];
    }

    /**
     * Sets Tz.
     * Time zone
     *
     * @maps tz
     */
    public function setTz(?string $tz): void
    {
        $this->tz['value'] = $tz;
    }

    /**
     * Unsets Tz.
     * Time zone
     */
    public function unsetTz(): void
    {
        $this->tz = [];
    }

    /**
     * Returns Parent Id.
     * Location GUID of the parent location
     */
    public function getParentId(): ?string
    {
        return $this->parentId;
    }

    /**
     * Sets Parent Id.
     * Location GUID of the parent location
     *
     * @maps parent_id
     */
    public function setParentId(?string $parentId): void
    {
        $this->parentId = $parentId;
    }

    /**
     * Returns Show Contact Notes.
     * If set to true will show 'Notes' tab on Contact
     */
    public function getShowContactNotes(): ?bool
    {
        return $this->showContactNotes;
    }

    /**
     * Sets Show Contact Notes.
     * If set to true will show 'Notes' tab on Contact
     *
     * @maps show_contact_notes
     */
    public function setShowContactNotes(?bool $showContactNotes): void
    {
        $this->showContactNotes = $showContactNotes;
    }

    /**
     * Returns Show Contact Files.
     * If set to true will show 'Files' tab on Contact
     */
    public function getShowContactFiles(): ?bool
    {
        return $this->showContactFiles;
    }

    /**
     * Sets Show Contact Files.
     * If set to true will show 'Files' tab on Contact
     *
     * @maps show_contact_files
     */
    public function setShowContactFiles(?bool $showContactFiles): void
    {
        $this->showContactFiles = $showContactFiles;
    }

    /**
     * Returns Created User Id.
     * User ID Created the register
     */
    public function getCreatedUserId(): ?string
    {
        if (count($this->createdUserId) == 0) {
            return null;
        }
        return $this->createdUserId['value'];
    }

    /**
     * Sets Created User Id.
     * User ID Created the register
     *
     * @maps created_user_id
     */
    public function setCreatedUserId(?string $createdUserId): void
    {
        $this->createdUserId['value'] = $createdUserId;
    }

    /**
     * Unsets Created User Id.
     * User ID Created the register
     */
    public function unsetCreatedUserId(): void
    {
        $this->createdUserId = [];
    }

    /**
     * Returns Location Type.
     * Location Type
     */
    public function getLocationType(): ?string
    {
        if (count($this->locationType) == 0) {
            return null;
        }
        return $this->locationType['value'];
    }

    /**
     * Sets Location Type.
     * Location Type
     *
     * @maps location_type
     * @factory \FortisAPILib\Models\LocationTypeEnum::checkValue
     */
    public function setLocationType(?string $locationType): void
    {
        $this->locationType['value'] = $locationType;
    }

    /**
     * Unsets Location Type.
     * Location Type
     */
    public function unsetLocationType(): void
    {
        $this->locationType = [];
    }

    /**
     * Returns Parent Name.
     * Name of the parent location
     */
    public function getParentName(): ?string
    {
        if (count($this->parentName) == 0) {
            return null;
        }
        return $this->parentName['value'];
    }

    /**
     * Sets Parent Name.
     * Name of the parent location
     *
     * @maps parent_name
     */
    public function setParentName(?string $parentName): void
    {
        $this->parentName['value'] = $parentName;
    }

    /**
     * Unsets Parent Name.
     * Name of the parent location
     */
    public function unsetParentName(): void
    {
        $this->parentName = [];
    }

    /**
     * Returns Ticket Hash Key.
     * Ticket Hash Key
     */
    public function getTicketHashKey(): ?string
    {
        if (count($this->ticketHashKey) == 0) {
            return null;
        }
        return $this->ticketHashKey['value'];
    }

    /**
     * Sets Ticket Hash Key.
     * Ticket Hash Key
     *
     * @maps ticket_hash_key
     */
    public function setTicketHashKey(?string $ticketHashKey): void
    {
        $this->ticketHashKey['value'] = $ticketHashKey;
    }

    /**
     * Unsets Ticket Hash Key.
     * Ticket Hash Key
     */
    public function unsetTicketHashKey(): void
    {
        $this->ticketHashKey = [];
    }

    /**
     * Returns Parent.
     * Parent Information on `expand`
     */
    public function getParent(): ?Parent3
    {
        return $this->parent;
    }

    /**
     * Sets Parent.
     * Parent Information on `expand`
     *
     * @maps parent
     */
    public function setParent(?Parent3 $parent): void
    {
        $this->parent = $parent;
    }

    /**
     * Returns Users.
     * User Information on `expand`
     *
     * @return User9[]|null
     */
    public function getUsers(): ?array
    {
        return $this->users;
    }

    /**
     * Sets Users.
     * User Information on `expand`
     *
     * @maps users
     *
     * @param User9[]|null $users
     */
    public function setUsers(?array $users): void
    {
        $this->users = $users;
    }

    /**
     * Returns Is Deletable.
     * Is Deletable Information on `expand`
     */
    public function getIsDeletable(): ?bool
    {
        return $this->isDeletable;
    }

    /**
     * Sets Is Deletable.
     * Is Deletable Information on `expand`
     *
     * @maps is_deletable
     */
    public function setIsDeletable(?bool $isDeletable): void
    {
        $this->isDeletable = $isDeletable;
    }

    /**
     * Returns Terminals.
     * Terminal Information on `expand`
     *
     * @return Terminal2[]|null
     */
    public function getTerminals(): ?array
    {
        return $this->terminals;
    }

    /**
     * Sets Terminals.
     * Terminal Information on `expand`
     *
     * @maps terminals
     *
     * @param Terminal2[]|null $terminals
     */
    public function setTerminals(?array $terminals): void
    {
        $this->terminals = $terminals;
    }

    /**
     * Returns Branding Domain.
     * Branding Domain Information on `expand`
     */
    public function getBrandingDomain(): ?BrandingDomain1
    {
        return $this->brandingDomain;
    }

    /**
     * Sets Branding Domain.
     * Branding Domain Information on `expand`
     *
     * @maps branding_domain
     */
    public function setBrandingDomain(?BrandingDomain1 $brandingDomain): void
    {
        $this->brandingDomain = $brandingDomain;
    }

    /**
     * Returns Product Invoice.
     * Product Invoice Information on `expand`
     */
    public function getProductInvoice(): ?ProductInvoice
    {
        return $this->productInvoice;
    }

    /**
     * Sets Product Invoice.
     * Product Invoice Information on `expand`
     *
     * @maps product_invoice
     */
    public function setProductInvoice(?ProductInvoice $productInvoice): void
    {
        $this->productInvoice = $productInvoice;
    }

    /**
     * Returns Product Files.
     * Product File Information on `expand`
     *
     * @return ProductFile1[]|null
     */
    public function getProductFiles(): ?array
    {
        return $this->productFiles;
    }

    /**
     * Sets Product Files.
     * Product File Information on `expand`
     *
     * @maps product_files
     *
     * @param ProductFile1[]|null $productFiles
     */
    public function setProductFiles(?array $productFiles): void
    {
        $this->productFiles = $productFiles;
    }

    /**
     * Returns Created User.
     * User Information on `expand`
     */
    public function getCreatedUser(): ?CreatedUser
    {
        return $this->createdUser;
    }

    /**
     * Sets Created User.
     * User Information on `expand`
     *
     * @maps created_user
     */
    public function setCreatedUser(?CreatedUser $createdUser): void
    {
        $this->createdUser = $createdUser;
    }

    /**
     * Returns Changelogs.
     * Changelog Information on `expand`
     *
     * @return Changelog[]|null
     */
    public function getChangelogs(): ?array
    {
        return $this->changelogs;
    }

    /**
     * Sets Changelogs.
     * Changelog Information on `expand`
     *
     * @maps changelogs
     *
     * @param Changelog[]|null $changelogs
     */
    public function setChangelogs(?array $changelogs): void
    {
        $this->changelogs = $changelogs;
    }

    /**
     * Returns Product Transactions.
     * Product Transaction Information on `expand`
     *
     * @return ProductTransaction1[]|null
     */
    public function getProductTransactions(): ?array
    {
        return $this->productTransactions;
    }

    /**
     * Sets Product Transactions.
     * Product Transaction Information on `expand`
     *
     * @maps product_transactions
     *
     * @param ProductTransaction1[]|null $productTransactions
     */
    public function setProductTransactions(?array $productTransactions): void
    {
        $this->productTransactions = $productTransactions;
    }

    /**
     * Returns Terminal Routers.
     * Terminal Router Information on `expand`
     *
     * @return TerminalRouter[]|null
     */
    public function getTerminalRouters(): ?array
    {
        return $this->terminalRouters;
    }

    /**
     * Sets Terminal Routers.
     * Terminal Router Information on `expand`
     *
     * @maps terminal_routers
     *
     * @param TerminalRouter[]|null $terminalRouters
     */
    public function setTerminalRouters(?array $terminalRouters): void
    {
        $this->terminalRouters = $terminalRouters;
    }

    /**
     * Returns Developer Company.
     * Developer Company Information on `expand`
     */
    public function getDeveloperCompany(): ?DeveloperCompany
    {
        return $this->developerCompany;
    }

    /**
     * Sets Developer Company.
     * Developer Company Information on `expand`
     *
     * @maps developer_company
     */
    public function setDeveloperCompany(?DeveloperCompany $developerCompany): void
    {
        $this->developerCompany = $developerCompany;
    }

    /**
     * Returns Developer Company Id.
     * Developer Company Id Information on `expand`
     */
    public function getDeveloperCompanyId(): ?string
    {
        if (count($this->developerCompanyId) == 0) {
            return null;
        }
        return $this->developerCompanyId['value'];
    }

    /**
     * Sets Developer Company Id.
     * Developer Company Id Information on `expand`
     *
     * @maps developer_company_id
     */
    public function setDeveloperCompanyId(?string $developerCompanyId): void
    {
        $this->developerCompanyId['value'] = $developerCompanyId;
    }

    /**
     * Unsets Developer Company Id.
     * Developer Company Id Information on `expand`
     */
    public function unsetDeveloperCompanyId(): void
    {
        $this->developerCompanyId = [];
    }

    /**
     * Returns Helppages.
     * Helppage Information on `expand`
     *
     * @return Helppage[]|null
     */
    public function getHelppages(): ?array
    {
        return $this->helppages;
    }

    /**
     * Sets Helppages.
     * Helppage Information on `expand`
     *
     * @maps helppages
     *
     * @param Helppage[]|null $helppages
     */
    public function setHelppages(?array $helppages): void
    {
        $this->helppages = $helppages;
    }

    /**
     * Returns Quick Invoice Setting.
     * Quick Invoice Setting Information on `expand`
     */
    public function getQuickInvoiceSetting(): ?QuickInvoiceSetting
    {
        return $this->quickInvoiceSetting;
    }

    /**
     * Sets Quick Invoice Setting.
     * Quick Invoice Setting Information on `expand`
     *
     * @maps quick_invoice_setting
     */
    public function setQuickInvoiceSetting(?QuickInvoiceSetting $quickInvoiceSetting): void
    {
        $this->quickInvoiceSetting = $quickInvoiceSetting;
    }

    /**
     * Returns Location Billing Accounts.
     * Location Billing Account Information on `expand`
     *
     * @return LocationBillingAccount[]|null
     */
    public function getLocationBillingAccounts(): ?array
    {
        return $this->locationBillingAccounts;
    }

    /**
     * Sets Location Billing Accounts.
     * Location Billing Account Information on `expand`
     *
     * @maps location_billing_accounts
     *
     * @param LocationBillingAccount[]|null $locationBillingAccounts
     */
    public function setLocationBillingAccounts(?array $locationBillingAccounts): void
    {
        $this->locationBillingAccounts = $locationBillingAccounts;
    }

    /**
     * Returns Marketplaces.
     * Marketplace Information on `expand`
     *
     * @return Marketplace[]|null
     */
    public function getMarketplaces(): ?array
    {
        return $this->marketplaces;
    }

    /**
     * Sets Marketplaces.
     * Marketplace Information on `expand`
     *
     * @maps marketplaces
     *
     * @param Marketplace[]|null $marketplaces
     */
    public function setMarketplaces(?array $marketplaces): void
    {
        $this->marketplaces = $marketplaces;
    }

    /**
     * Returns Locationmarketplaces.
     * Locationmarketplaces Information on `expand`
     *
     * @return Locationmarketplace[]|null
     */
    public function getLocationmarketplaces(): ?array
    {
        return $this->locationmarketplaces;
    }

    /**
     * Sets Locationmarketplaces.
     * Locationmarketplaces Information on `expand`
     *
     * @maps locationmarketplaces
     *
     * @param Locationmarketplace[]|null $locationmarketplaces
     */
    public function setLocationmarketplaces(?array $locationmarketplaces): void
    {
        $this->locationmarketplaces = $locationmarketplaces;
    }

    /**
     * Returns Addons.
     * Addons Information on `expand`
     *
     * @return Addon[]|null
     */
    public function getAddons(): ?array
    {
        return $this->addons;
    }

    /**
     * Sets Addons.
     * Addons Information on `expand`
     *
     * @maps addons
     *
     * @param Addon[]|null $addons
     */
    public function setAddons(?array $addons): void
    {
        $this->addons = $addons;
    }

    /**
     * Converts the Data10 object to a human-readable string representation.
     *
     * @return string The string representation of the Data10 object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'Data10',
            [
                'id' => $this->id,
                'createdTs' => $this->createdTs,
                'modifiedTs' => $this->modifiedTs,
                'accountNumber' => $this->getAccountNumber(),
                'address' => $this->address,
                'brandingDomainId' => $this->getBrandingDomainId(),
                'contactEmailTrxReceiptDefault' => $this->contactEmailTrxReceiptDefault,
                'defaultAch' => $this->getDefaultAch(),
                'defaultCc' => $this->getDefaultCc(),
                'emailReplyTo' => $this->getEmailReplyTo(),
                'fax' => $this->getFax(),
                'locationApiId' => $this->getLocationApiId(),
                'locationApiKey' => $this->getLocationApiKey(),
                'locationC1' => $this->getLocationC1(),
                'locationC2' => $this->getLocationC2(),
                'locationC3' => $this->getLocationC3(),
                'name' => $this->name,
                'officePhone' => $this->getOfficePhone(),
                'officeExtPhone' => $this->getOfficeExtPhone(),
                'tz' => $this->getTz(),
                'parentId' => $this->parentId,
                'showContactNotes' => $this->showContactNotes,
                'showContactFiles' => $this->showContactFiles,
                'createdUserId' => $this->getCreatedUserId(),
                'locationType' => $this->getLocationType(),
                'parentName' => $this->getParentName(),
                'ticketHashKey' => $this->getTicketHashKey(),
                'parent' => $this->parent,
                'users' => $this->users,
                'isDeletable' => $this->isDeletable,
                'terminals' => $this->terminals,
                'brandingDomain' => $this->brandingDomain,
                'productInvoice' => $this->productInvoice,
                'productFiles' => $this->productFiles,
                'createdUser' => $this->createdUser,
                'changelogs' => $this->changelogs,
                'productTransactions' => $this->productTransactions,
                'terminalRouters' => $this->terminalRouters,
                'developerCompany' => $this->developerCompany,
                'developerCompanyId' => $this->getDeveloperCompanyId(),
                'helppages' => $this->helppages,
                'quickInvoiceSetting' => $this->quickInvoiceSetting,
                'locationBillingAccounts' => $this->locationBillingAccounts,
                'marketplaces' => $this->marketplaces,
                'locationmarketplaces' => $this->locationmarketplaces,
                'addons' => $this->addons,
                'additionalProperties' => $this->additionalProperties
            ]
        );
    }

    private $additionalProperties = [];

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property.
     * @param mixed $value Value of property.
     */
    public function addAdditionalProperty(string $name, $value)
    {
        $this->additionalProperties[$name] = $value;
    }

    /**
     * Find an additional property by name in this model or false if property does not exist.
     *
     * @param string $name Name of property.
     *
     * @return mixed|false Value of the property.
     */
    public function findAdditionalProperty(string $name)
    {
        if (isset($this->additionalProperties[$name])) {
            return $this->additionalProperties[$name];
        }
        return false;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        if (isset($this->id)) {
            $json['id']                                = $this->id;
        }
        if (isset($this->createdTs)) {
            $json['created_ts']                        = $this->createdTs;
        }
        if (isset($this->modifiedTs)) {
            $json['modified_ts']                       = $this->modifiedTs;
        }
        if (!empty($this->accountNumber)) {
            $json['account_number']                    = $this->accountNumber['value'];
        }
        if (isset($this->address)) {
            $json['address']                           = $this->address;
        }
        if (!empty($this->brandingDomainId)) {
            $json['branding_domain_id']                = $this->brandingDomainId['value'];
        }
        if (isset($this->contactEmailTrxReceiptDefault)) {
            $json['contact_email_trx_receipt_default'] = $this->contactEmailTrxReceiptDefault;
        }
        if (!empty($this->defaultAch)) {
            $json['default_ach']                       = $this->defaultAch['value'];
        }
        if (!empty($this->defaultCc)) {
            $json['default_cc']                        = $this->defaultCc['value'];
        }
        if (!empty($this->emailReplyTo)) {
            $json['email_reply_to']                    = $this->emailReplyTo['value'];
        }
        if (!empty($this->fax)) {
            $json['fax']                               = $this->fax['value'];
        }
        if (!empty($this->locationApiId)) {
            $json['location_api_id']                   = $this->locationApiId['value'];
        }
        if (!empty($this->locationApiKey)) {
            $json['location_api_key']                  = $this->locationApiKey['value'];
        }
        if (!empty($this->locationC1)) {
            $json['location_c1']                       = $this->locationC1['value'];
        }
        if (!empty($this->locationC2)) {
            $json['location_c2']                       = $this->locationC2['value'];
        }
        if (!empty($this->locationC3)) {
            $json['location_c3']                       = $this->locationC3['value'];
        }
        if (isset($this->name)) {
            $json['name']                              = $this->name;
        }
        if (!empty($this->officePhone)) {
            $json['office_phone']                      = $this->officePhone['value'];
        }
        if (!empty($this->officeExtPhone)) {
            $json['office_ext_phone']                  = $this->officeExtPhone['value'];
        }
        if (!empty($this->tz)) {
            $json['tz']                                = $this->tz['value'];
        }
        if (isset($this->parentId)) {
            $json['parent_id']                         = $this->parentId;
        }
        if (isset($this->showContactNotes)) {
            $json['show_contact_notes']                = $this->showContactNotes;
        }
        if (isset($this->showContactFiles)) {
            $json['show_contact_files']                = $this->showContactFiles;
        }
        if (!empty($this->createdUserId)) {
            $json['created_user_id']                   = $this->createdUserId['value'];
        }
        if (!empty($this->locationType)) {
            $json['location_type']                     = LocationTypeEnum::checkValue($this->locationType['value']);
        }
        if (!empty($this->parentName)) {
            $json['parent_name']                       = $this->parentName['value'];
        }
        if (!empty($this->ticketHashKey)) {
            $json['ticket_hash_key']                   = $this->ticketHashKey['value'];
        }
        if (isset($this->parent)) {
            $json['parent']                            = $this->parent;
        }
        if (isset($this->users)) {
            $json['users']                             = $this->users;
        }
        if (isset($this->isDeletable)) {
            $json['is_deletable']                      = $this->isDeletable;
        }
        if (isset($this->terminals)) {
            $json['terminals']                         = $this->terminals;
        }
        if (isset($this->brandingDomain)) {
            $json['branding_domain']                   = $this->brandingDomain;
        }
        if (isset($this->productInvoice)) {
            $json['product_invoice']                   = $this->productInvoice;
        }
        if (isset($this->productFiles)) {
            $json['product_files']                     = $this->productFiles;
        }
        if (isset($this->createdUser)) {
            $json['created_user']                      = $this->createdUser;
        }
        if (isset($this->changelogs)) {
            $json['changelogs']                        = $this->changelogs;
        }
        if (isset($this->productTransactions)) {
            $json['product_transactions']              = $this->productTransactions;
        }
        if (isset($this->terminalRouters)) {
            $json['terminal_routers']                  = $this->terminalRouters;
        }
        if (isset($this->developerCompany)) {
            $json['developer_company']                 = $this->developerCompany;
        }
        if (!empty($this->developerCompanyId)) {
            $json['developer_company_id']              = $this->developerCompanyId['value'];
        }
        if (isset($this->helppages)) {
            $json['helppages']                         = $this->helppages;
        }
        if (isset($this->quickInvoiceSetting)) {
            $json['quick_invoice_setting']             = $this->quickInvoiceSetting;
        }
        if (isset($this->locationBillingAccounts)) {
            $json['location_billing_accounts']         = $this->locationBillingAccounts;
        }
        if (isset($this->marketplaces)) {
            $json['marketplaces']                      = $this->marketplaces;
        }
        if (isset($this->locationmarketplaces)) {
            $json['locationmarketplaces']              = $this->locationmarketplaces;
        }
        if (isset($this->addons)) {
            $json['addons']                            = $this->addons;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
