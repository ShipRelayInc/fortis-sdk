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

class User9 implements \JsonSerializable
{
    /**
     * @var array
     */
    private $accountNumber = [];

    /**
     * @var array
     */
    private $brandingDomainUrl = [];

    /**
     * @var array
     */
    private $cellPhone = [];

    /**
     * @var array
     */
    private $companyName = [];

    /**
     * @var array
     */
    private $contactId = [];

    /**
     * @var array
     */
    private $dateOfBirth = [];

    /**
     * @var array
     */
    private $domainId = [];

    /**
     * @var string|null
     */
    private $email;

    /**
     * @var bool|null
     */
    private $emailTrxReceipt;

    /**
     * @var array
     */
    private $homePhone = [];

    /**
     * @var array
     */
    private $firstName = [];

    /**
     * @var string|null
     */
    private $lastName;

    /**
     * @var array
     */
    private $locale = [];

    /**
     * @var array
     */
    private $officePhone = [];

    /**
     * @var array
     */
    private $officeExtPhone = [];

    /**
     * @var string|null
     */
    private $primaryLocationId;

    /**
     * @var array
     */
    private $requiresNewPassword = [];

    /**
     * @var array
     */
    private $termsConditionCode = [];

    /**
     * @var string|null
     */
    private $tz;

    /**
     * @var UiPrefs|null
     */
    private $uiPrefs;

    /**
     * @var string|null
     */
    private $username;

    /**
     * @var array
     */
    private $userApiKey = [];

    /**
     * @var array
     */
    private $userHashKey = [];

    /**
     * @var int|null
     */
    private $userTypeCode;

    /**
     * @var array
     */
    private $password = [];

    /**
     * @var array
     */
    private $zip = [];

    /**
     * @var array
     */
    private $locationId = [];

    /**
     * @var array
     */
    private $contactApiId = [];

    /**
     * @var array
     */
    private $primaryLocationApiId = [];

    /**
     * @var array
     */
    private $statusCode = [];

    /**
     * @var bool|null
     */
    private $apiOnly;

    /**
     * @var bool|null
     */
    private $isInvitation;

    /**
     * @var Address2|null
     */
    private $address;

    /**
     * @var string|null
     */
    private $id;

    /**
     * @var bool|null
     */
    private $status;

    /**
     * @var int|null
     */
    private $loginAttempts;

    /**
     * @var int|null
     */
    private $lastLoginTs;

    /**
     * @var int|null
     */
    private $createdTs;

    /**
     * @var int|null
     */
    private $modifiedTs;

    /**
     * @var string|null
     */
    private $createdUserId;

    /**
     * @var array
     */
    private $termsAcceptedTs = [];

    /**
     * @var array
     */
    private $termsAgreeIp = [];

    /**
     * @var string|null
     */
    private $currentDateTime;

    /**
     * @var array
     */
    private $currentLoginIp = [];

    /**
     * @var array
     */
    private $currentLogin = [];

    /**
     * @var bool|null
     */
    private $sftpAccess;

    /**
     * @var array
     */
    private $logApiResponseBodyTs = [];

    /**
     * Returns Account Number.
     * Account Number
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
     * Account Number
     *
     * @maps account_number
     */
    public function setAccountNumber(?string $accountNumber): void
    {
        $this->accountNumber['value'] = $accountNumber;
    }

    /**
     * Unsets Account Number.
     * Account Number
     */
    public function unsetAccountNumber(): void
    {
        $this->accountNumber = [];
    }

    /**
     * Returns Branding Domain Url.
     * Branding Domain Url
     */
    public function getBrandingDomainUrl(): ?string
    {
        if (count($this->brandingDomainUrl) == 0) {
            return null;
        }
        return $this->brandingDomainUrl['value'];
    }

    /**
     * Sets Branding Domain Url.
     * Branding Domain Url
     *
     * @maps branding_domain_url
     */
    public function setBrandingDomainUrl(?string $brandingDomainUrl): void
    {
        $this->brandingDomainUrl['value'] = $brandingDomainUrl;
    }

    /**
     * Unsets Branding Domain Url.
     * Branding Domain Url
     */
    public function unsetBrandingDomainUrl(): void
    {
        $this->brandingDomainUrl = [];
    }

    /**
     * Returns Cell Phone.
     * Cell Phone
     */
    public function getCellPhone(): ?string
    {
        if (count($this->cellPhone) == 0) {
            return null;
        }
        return $this->cellPhone['value'];
    }

    /**
     * Sets Cell Phone.
     * Cell Phone
     *
     * @maps cell_phone
     */
    public function setCellPhone(?string $cellPhone): void
    {
        $this->cellPhone['value'] = $cellPhone;
    }

    /**
     * Unsets Cell Phone.
     * Cell Phone
     */
    public function unsetCellPhone(): void
    {
        $this->cellPhone = [];
    }

    /**
     * Returns Company Name.
     * Company Name
     */
    public function getCompanyName(): ?string
    {
        if (count($this->companyName) == 0) {
            return null;
        }
        return $this->companyName['value'];
    }

    /**
     * Sets Company Name.
     * Company Name
     *
     * @maps company_name
     */
    public function setCompanyName(?string $companyName): void
    {
        $this->companyName['value'] = $companyName;
    }

    /**
     * Unsets Company Name.
     * Company Name
     */
    public function unsetCompanyName(): void
    {
        $this->companyName = [];
    }

    /**
     * Returns Contact Id.
     * Contact
     */
    public function getContactId(): ?string
    {
        if (count($this->contactId) == 0) {
            return null;
        }
        return $this->contactId['value'];
    }

    /**
     * Sets Contact Id.
     * Contact
     *
     * @maps contact_id
     */
    public function setContactId(?string $contactId): void
    {
        $this->contactId['value'] = $contactId;
    }

    /**
     * Unsets Contact Id.
     * Contact
     */
    public function unsetContactId(): void
    {
        $this->contactId = [];
    }

    /**
     * Returns Date of Birth.
     * Date Of Birth
     */
    public function getDateOfBirth(): ?string
    {
        if (count($this->dateOfBirth) == 0) {
            return null;
        }
        return $this->dateOfBirth['value'];
    }

    /**
     * Sets Date of Birth.
     * Date Of Birth
     *
     * @maps date_of_birth
     */
    public function setDateOfBirth(?string $dateOfBirth): void
    {
        $this->dateOfBirth['value'] = $dateOfBirth;
    }

    /**
     * Unsets Date of Birth.
     * Date Of Birth
     */
    public function unsetDateOfBirth(): void
    {
        $this->dateOfBirth = [];
    }

    /**
     * Returns Domain Id.
     * Domain
     */
    public function getDomainId(): ?string
    {
        if (count($this->domainId) == 0) {
            return null;
        }
        return $this->domainId['value'];
    }

    /**
     * Sets Domain Id.
     * Domain
     *
     * @maps domain_id
     */
    public function setDomainId(?string $domainId): void
    {
        $this->domainId['value'] = $domainId;
    }

    /**
     * Unsets Domain Id.
     * Domain
     */
    public function unsetDomainId(): void
    {
        $this->domainId = [];
    }

    /**
     * Returns Email.
     * Email
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * Sets Email.
     * Email
     *
     * @maps email
     */
    public function setEmail(?string $email): void
    {
        $this->email = $email;
    }

    /**
     * Returns Email Trx Receipt.
     * Email Trx Receipt
     */
    public function getEmailTrxReceipt(): ?bool
    {
        return $this->emailTrxReceipt;
    }

    /**
     * Sets Email Trx Receipt.
     * Email Trx Receipt
     *
     * @maps email_trx_receipt
     */
    public function setEmailTrxReceipt(?bool $emailTrxReceipt): void
    {
        $this->emailTrxReceipt = $emailTrxReceipt;
    }

    /**
     * Returns Home Phone.
     * Home Phone
     */
    public function getHomePhone(): ?string
    {
        if (count($this->homePhone) == 0) {
            return null;
        }
        return $this->homePhone['value'];
    }

    /**
     * Sets Home Phone.
     * Home Phone
     *
     * @maps home_phone
     */
    public function setHomePhone(?string $homePhone): void
    {
        $this->homePhone['value'] = $homePhone;
    }

    /**
     * Unsets Home Phone.
     * Home Phone
     */
    public function unsetHomePhone(): void
    {
        $this->homePhone = [];
    }

    /**
     * Returns First Name.
     * First Name
     */
    public function getFirstName(): ?string
    {
        if (count($this->firstName) == 0) {
            return null;
        }
        return $this->firstName['value'];
    }

    /**
     * Sets First Name.
     * First Name
     *
     * @maps first_name
     */
    public function setFirstName(?string $firstName): void
    {
        $this->firstName['value'] = $firstName;
    }

    /**
     * Unsets First Name.
     * First Name
     */
    public function unsetFirstName(): void
    {
        $this->firstName = [];
    }

    /**
     * Returns Last Name.
     * Last Name
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    /**
     * Sets Last Name.
     * Last Name
     *
     * @maps last_name
     */
    public function setLastName(?string $lastName): void
    {
        $this->lastName = $lastName;
    }

    /**
     * Returns Locale.
     * Locale
     */
    public function getLocale(): ?string
    {
        if (count($this->locale) == 0) {
            return null;
        }
        return $this->locale['value'];
    }

    /**
     * Sets Locale.
     * Locale
     *
     * @maps locale
     */
    public function setLocale(?string $locale): void
    {
        $this->locale['value'] = $locale;
    }

    /**
     * Unsets Locale.
     * Locale
     */
    public function unsetLocale(): void
    {
        $this->locale = [];
    }

    /**
     * Returns Office Phone.
     * Office Phone
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
     * Office Phone
     *
     * @maps office_phone
     */
    public function setOfficePhone(?string $officePhone): void
    {
        $this->officePhone['value'] = $officePhone;
    }

    /**
     * Unsets Office Phone.
     * Office Phone
     */
    public function unsetOfficePhone(): void
    {
        $this->officePhone = [];
    }

    /**
     * Returns Office Ext Phone.
     * Office Ext Phone
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
     * Office Ext Phone
     *
     * @maps office_ext_phone
     */
    public function setOfficeExtPhone(?string $officeExtPhone): void
    {
        $this->officeExtPhone['value'] = $officeExtPhone;
    }

    /**
     * Unsets Office Ext Phone.
     * Office Ext Phone
     */
    public function unsetOfficeExtPhone(): void
    {
        $this->officeExtPhone = [];
    }

    /**
     * Returns Primary Location Id.
     * Primary Location ID
     */
    public function getPrimaryLocationId(): ?string
    {
        return $this->primaryLocationId;
    }

    /**
     * Sets Primary Location Id.
     * Primary Location ID
     *
     * @maps primary_location_id
     */
    public function setPrimaryLocationId(?string $primaryLocationId): void
    {
        $this->primaryLocationId = $primaryLocationId;
    }

    /**
     * Returns Requires New Password.
     * Requires New Password
     */
    public function getRequiresNewPassword(): ?string
    {
        if (count($this->requiresNewPassword) == 0) {
            return null;
        }
        return $this->requiresNewPassword['value'];
    }

    /**
     * Sets Requires New Password.
     * Requires New Password
     *
     * @maps requires_new_password
     */
    public function setRequiresNewPassword(?string $requiresNewPassword): void
    {
        $this->requiresNewPassword['value'] = $requiresNewPassword;
    }

    /**
     * Unsets Requires New Password.
     * Requires New Password
     */
    public function unsetRequiresNewPassword(): void
    {
        $this->requiresNewPassword = [];
    }

    /**
     * Returns Terms Condition Code.
     * Terms Condition (This field is required when updating your own password).
     */
    public function getTermsConditionCode(): ?string
    {
        if (count($this->termsConditionCode) == 0) {
            return null;
        }
        return $this->termsConditionCode['value'];
    }

    /**
     * Sets Terms Condition Code.
     * Terms Condition (This field is required when updating your own password).
     *
     * @maps terms_condition_code
     */
    public function setTermsConditionCode(?string $termsConditionCode): void
    {
        $this->termsConditionCode['value'] = $termsConditionCode;
    }

    /**
     * Unsets Terms Condition Code.
     * Terms Condition (This field is required when updating your own password).
     */
    public function unsetTermsConditionCode(): void
    {
        $this->termsConditionCode = [];
    }

    /**
     * Returns Tz.
     * Time zone
     */
    public function getTz(): ?string
    {
        return $this->tz;
    }

    /**
     * Sets Tz.
     * Time zone
     *
     * @maps tz
     */
    public function setTz(?string $tz): void
    {
        $this->tz = $tz;
    }

    /**
     * Returns Ui Prefs.
     * Ui Prefs
     */
    public function getUiPrefs(): ?UiPrefs
    {
        return $this->uiPrefs;
    }

    /**
     * Sets Ui Prefs.
     * Ui Prefs
     *
     * @maps ui_prefs
     */
    public function setUiPrefs(?UiPrefs $uiPrefs): void
    {
        $this->uiPrefs = $uiPrefs;
    }

    /**
     * Returns Username.
     * Username
     */
    public function getUsername(): ?string
    {
        return $this->username;
    }

    /**
     * Sets Username.
     * Username
     *
     * @maps username
     */
    public function setUsername(?string $username): void
    {
        $this->username = $username;
    }

    /**
     * Returns User Api Key.
     * User Api Key
     */
    public function getUserApiKey(): ?string
    {
        if (count($this->userApiKey) == 0) {
            return null;
        }
        return $this->userApiKey['value'];
    }

    /**
     * Sets User Api Key.
     * User Api Key
     *
     * @maps user_api_key
     */
    public function setUserApiKey(?string $userApiKey): void
    {
        $this->userApiKey['value'] = $userApiKey;
    }

    /**
     * Unsets User Api Key.
     * User Api Key
     */
    public function unsetUserApiKey(): void
    {
        $this->userApiKey = [];
    }

    /**
     * Returns User Hash Key.
     * User Hash Key
     */
    public function getUserHashKey(): ?string
    {
        if (count($this->userHashKey) == 0) {
            return null;
        }
        return $this->userHashKey['value'];
    }

    /**
     * Sets User Hash Key.
     * User Hash Key
     *
     * @maps user_hash_key
     */
    public function setUserHashKey(?string $userHashKey): void
    {
        $this->userHashKey['value'] = $userHashKey;
    }

    /**
     * Unsets User Hash Key.
     * User Hash Key
     */
    public function unsetUserHashKey(): void
    {
        $this->userHashKey = [];
    }

    /**
     * Returns User Type Code.
     * User Type
     */
    public function getUserTypeCode(): ?int
    {
        return $this->userTypeCode;
    }

    /**
     * Sets User Type Code.
     * User Type
     *
     * @maps user_type_code
     * @factory \FortisAPILib\Models\UserTypeCodeEnum::checkValue
     */
    public function setUserTypeCode(?int $userTypeCode): void
    {
        $this->userTypeCode = $userTypeCode;
    }

    /**
     * Returns Password.
     * Password
     */
    public function getPassword(): ?string
    {
        if (count($this->password) == 0) {
            return null;
        }
        return $this->password['value'];
    }

    /**
     * Sets Password.
     * Password
     *
     * @maps password
     */
    public function setPassword(?string $password): void
    {
        $this->password['value'] = $password;
    }

    /**
     * Unsets Password.
     * Password
     */
    public function unsetPassword(): void
    {
        $this->password = [];
    }

    /**
     * Returns Zip.
     * Zip
     */
    public function getZip(): ?string
    {
        if (count($this->zip) == 0) {
            return null;
        }
        return $this->zip['value'];
    }

    /**
     * Sets Zip.
     * Zip
     *
     * @maps zip
     */
    public function setZip(?string $zip): void
    {
        $this->zip['value'] = $zip;
    }

    /**
     * Unsets Zip.
     * Zip
     */
    public function unsetZip(): void
    {
        $this->zip = [];
    }

    /**
     * Returns Location Id.
     * Location ID
     */
    public function getLocationId(): ?string
    {
        if (count($this->locationId) == 0) {
            return null;
        }
        return $this->locationId['value'];
    }

    /**
     * Sets Location Id.
     * Location ID
     *
     * @maps location_id
     */
    public function setLocationId(?string $locationId): void
    {
        $this->locationId['value'] = $locationId;
    }

    /**
     * Unsets Location Id.
     * Location ID
     */
    public function unsetLocationId(): void
    {
        $this->locationId = [];
    }

    /**
     * Returns Contact Api Id.
     * ContactApi Id
     */
    public function getContactApiId(): ?string
    {
        if (count($this->contactApiId) == 0) {
            return null;
        }
        return $this->contactApiId['value'];
    }

    /**
     * Sets Contact Api Id.
     * ContactApi Id
     *
     * @maps contact_api_id
     */
    public function setContactApiId(?string $contactApiId): void
    {
        $this->contactApiId['value'] = $contactApiId;
    }

    /**
     * Unsets Contact Api Id.
     * ContactApi Id
     */
    public function unsetContactApiId(): void
    {
        $this->contactApiId = [];
    }

    /**
     * Returns Primary Location Api Id.
     * Primary LocationApi ID
     */
    public function getPrimaryLocationApiId(): ?string
    {
        if (count($this->primaryLocationApiId) == 0) {
            return null;
        }
        return $this->primaryLocationApiId['value'];
    }

    /**
     * Sets Primary Location Api Id.
     * Primary LocationApi ID
     *
     * @maps primary_location_api_id
     */
    public function setPrimaryLocationApiId(?string $primaryLocationApiId): void
    {
        $this->primaryLocationApiId['value'] = $primaryLocationApiId;
    }

    /**
     * Unsets Primary Location Api Id.
     * Primary LocationApi ID
     */
    public function unsetPrimaryLocationApiId(): void
    {
        $this->primaryLocationApiId = [];
    }

    /**
     * Returns Status Code.
     * Status Code
     */
    public function getStatusCode(): ?int
    {
        if (count($this->statusCode) == 0) {
            return null;
        }
        return $this->statusCode['value'];
    }

    /**
     * Sets Status Code.
     * Status Code
     *
     * @maps status_code
     * @factory \FortisAPILib\Models\StatusCodeEnum::checkValue
     */
    public function setStatusCode(?int $statusCode): void
    {
        $this->statusCode['value'] = $statusCode;
    }

    /**
     * Unsets Status Code.
     * Status Code
     */
    public function unsetStatusCode(): void
    {
        $this->statusCode = [];
    }

    /**
     * Returns Api Only.
     * API Only
     */
    public function getApiOnly(): ?bool
    {
        return $this->apiOnly;
    }

    /**
     * Sets Api Only.
     * API Only
     *
     * @maps api_only
     */
    public function setApiOnly(?bool $apiOnly): void
    {
        $this->apiOnly = $apiOnly;
    }

    /**
     * Returns Is Invitation.
     * Is Invitation
     */
    public function getIsInvitation(): ?bool
    {
        return $this->isInvitation;
    }

    /**
     * Sets Is Invitation.
     * Is Invitation
     *
     * @maps is_invitation
     */
    public function setIsInvitation(?bool $isInvitation): void
    {
        $this->isInvitation = $isInvitation;
    }

    /**
     * Returns Address.
     * Address
     */
    public function getAddress(): ?Address2
    {
        return $this->address;
    }

    /**
     * Sets Address.
     * Address
     *
     * @maps address
     */
    public function setAddress(?Address2 $address): void
    {
        $this->address = $address;
    }

    /**
     * Returns Id.
     * User ID
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Sets Id.
     * User ID
     *
     * @maps id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Status.
     * Status
     */
    public function getStatus(): ?bool
    {
        return $this->status;
    }

    /**
     * Sets Status.
     * Status
     *
     * @maps status
     */
    public function setStatus(?bool $status): void
    {
        $this->status = $status;
    }

    /**
     * Returns Login Attempts.
     * Login Attempts
     */
    public function getLoginAttempts(): ?int
    {
        return $this->loginAttempts;
    }

    /**
     * Sets Login Attempts.
     * Login Attempts
     *
     * @maps login_attempts
     */
    public function setLoginAttempts(?int $loginAttempts): void
    {
        $this->loginAttempts = $loginAttempts;
    }

    /**
     * Returns Last Login Ts.
     * Last Login
     */
    public function getLastLoginTs(): ?int
    {
        return $this->lastLoginTs;
    }

    /**
     * Sets Last Login Ts.
     * Last Login
     *
     * @maps last_login_ts
     */
    public function setLastLoginTs(?int $lastLoginTs): void
    {
        $this->lastLoginTs = $lastLoginTs;
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
     * Returns Created User Id.
     * Created User
     */
    public function getCreatedUserId(): ?string
    {
        return $this->createdUserId;
    }

    /**
     * Sets Created User Id.
     * Created User
     *
     * @maps created_user_id
     */
    public function setCreatedUserId(?string $createdUserId): void
    {
        $this->createdUserId = $createdUserId;
    }

    /**
     * Returns Terms Accepted Ts.
     * Terms Accepted
     */
    public function getTermsAcceptedTs(): ?int
    {
        if (count($this->termsAcceptedTs) == 0) {
            return null;
        }
        return $this->termsAcceptedTs['value'];
    }

    /**
     * Sets Terms Accepted Ts.
     * Terms Accepted
     *
     * @maps terms_accepted_ts
     */
    public function setTermsAcceptedTs(?int $termsAcceptedTs): void
    {
        $this->termsAcceptedTs['value'] = $termsAcceptedTs;
    }

    /**
     * Unsets Terms Accepted Ts.
     * Terms Accepted
     */
    public function unsetTermsAcceptedTs(): void
    {
        $this->termsAcceptedTs = [];
    }

    /**
     * Returns Terms Agree Ip.
     * Terms Agree Ip
     */
    public function getTermsAgreeIp(): ?string
    {
        if (count($this->termsAgreeIp) == 0) {
            return null;
        }
        return $this->termsAgreeIp['value'];
    }

    /**
     * Sets Terms Agree Ip.
     * Terms Agree Ip
     *
     * @maps terms_agree_ip
     */
    public function setTermsAgreeIp(?string $termsAgreeIp): void
    {
        $this->termsAgreeIp['value'] = $termsAgreeIp;
    }

    /**
     * Unsets Terms Agree Ip.
     * Terms Agree Ip
     */
    public function unsetTermsAgreeIp(): void
    {
        $this->termsAgreeIp = [];
    }

    /**
     * Returns Current Date Time.
     * Current Date Time
     */
    public function getCurrentDateTime(): ?string
    {
        return $this->currentDateTime;
    }

    /**
     * Sets Current Date Time.
     * Current Date Time
     *
     * @maps current_date_time
     */
    public function setCurrentDateTime(?string $currentDateTime): void
    {
        $this->currentDateTime = $currentDateTime;
    }

    /**
     * Returns Current Login Ip.
     * Current Login Ip
     */
    public function getCurrentLoginIp(): ?string
    {
        if (count($this->currentLoginIp) == 0) {
            return null;
        }
        return $this->currentLoginIp['value'];
    }

    /**
     * Sets Current Login Ip.
     * Current Login Ip
     *
     * @maps current_login_ip
     */
    public function setCurrentLoginIp(?string $currentLoginIp): void
    {
        $this->currentLoginIp['value'] = $currentLoginIp;
    }

    /**
     * Unsets Current Login Ip.
     * Current Login Ip
     */
    public function unsetCurrentLoginIp(): void
    {
        $this->currentLoginIp = [];
    }

    /**
     * Returns Current Login.
     * Current Login Timestamp
     */
    public function getCurrentLogin(): ?int
    {
        if (count($this->currentLogin) == 0) {
            return null;
        }
        return $this->currentLogin['value'];
    }

    /**
     * Sets Current Login.
     * Current Login Timestamp
     *
     * @maps current_login
     */
    public function setCurrentLogin(?int $currentLogin): void
    {
        $this->currentLogin['value'] = $currentLogin;
    }

    /**
     * Unsets Current Login.
     * Current Login Timestamp
     */
    public function unsetCurrentLogin(): void
    {
        $this->currentLogin = [];
    }

    /**
     * Returns Sftp Access.
     * SFTP Access
     */
    public function getSftpAccess(): ?bool
    {
        return $this->sftpAccess;
    }

    /**
     * Sets Sftp Access.
     * SFTP Access
     *
     * @maps sftp_access
     */
    public function setSftpAccess(?bool $sftpAccess): void
    {
        $this->sftpAccess = $sftpAccess;
    }

    /**
     * Returns Log Api Response Body Ts.
     * Log Api Response Body
     */
    public function getLogApiResponseBodyTs(): ?int
    {
        if (count($this->logApiResponseBodyTs) == 0) {
            return null;
        }
        return $this->logApiResponseBodyTs['value'];
    }

    /**
     * Sets Log Api Response Body Ts.
     * Log Api Response Body
     *
     * @maps log_api_response_body_ts
     */
    public function setLogApiResponseBodyTs(?int $logApiResponseBodyTs): void
    {
        $this->logApiResponseBodyTs['value'] = $logApiResponseBodyTs;
    }

    /**
     * Unsets Log Api Response Body Ts.
     * Log Api Response Body
     */
    public function unsetLogApiResponseBodyTs(): void
    {
        $this->logApiResponseBodyTs = [];
    }

    /**
     * Converts the User9 object to a human-readable string representation.
     *
     * @return string The string representation of the User9 object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'User9',
            [
                'accountNumber' => $this->getAccountNumber(),
                'brandingDomainUrl' => $this->getBrandingDomainUrl(),
                'cellPhone' => $this->getCellPhone(),
                'companyName' => $this->getCompanyName(),
                'contactId' => $this->getContactId(),
                'dateOfBirth' => $this->getDateOfBirth(),
                'domainId' => $this->getDomainId(),
                'email' => $this->email,
                'emailTrxReceipt' => $this->emailTrxReceipt,
                'homePhone' => $this->getHomePhone(),
                'firstName' => $this->getFirstName(),
                'lastName' => $this->lastName,
                'locale' => $this->getLocale(),
                'officePhone' => $this->getOfficePhone(),
                'officeExtPhone' => $this->getOfficeExtPhone(),
                'primaryLocationId' => $this->primaryLocationId,
                'requiresNewPassword' => $this->getRequiresNewPassword(),
                'termsConditionCode' => $this->getTermsConditionCode(),
                'tz' => $this->tz,
                'uiPrefs' => $this->uiPrefs,
                'username' => $this->username,
                'userApiKey' => $this->getUserApiKey(),
                'userHashKey' => $this->getUserHashKey(),
                'userTypeCode' => $this->userTypeCode,
                'password' => $this->getPassword(),
                'zip' => $this->getZip(),
                'locationId' => $this->getLocationId(),
                'contactApiId' => $this->getContactApiId(),
                'primaryLocationApiId' => $this->getPrimaryLocationApiId(),
                'statusCode' => $this->getStatusCode(),
                'apiOnly' => $this->apiOnly,
                'isInvitation' => $this->isInvitation,
                'address' => $this->address,
                'id' => $this->id,
                'status' => $this->status,
                'loginAttempts' => $this->loginAttempts,
                'lastLoginTs' => $this->lastLoginTs,
                'createdTs' => $this->createdTs,
                'modifiedTs' => $this->modifiedTs,
                'createdUserId' => $this->createdUserId,
                'termsAcceptedTs' => $this->getTermsAcceptedTs(),
                'termsAgreeIp' => $this->getTermsAgreeIp(),
                'currentDateTime' => $this->currentDateTime,
                'currentLoginIp' => $this->getCurrentLoginIp(),
                'currentLogin' => $this->getCurrentLogin(),
                'sftpAccess' => $this->sftpAccess,
                'logApiResponseBodyTs' => $this->getLogApiResponseBodyTs(),
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
        if (!empty($this->accountNumber)) {
            $json['account_number']           = $this->accountNumber['value'];
        }
        if (!empty($this->brandingDomainUrl)) {
            $json['branding_domain_url']      = $this->brandingDomainUrl['value'];
        }
        if (!empty($this->cellPhone)) {
            $json['cell_phone']               = $this->cellPhone['value'];
        }
        if (!empty($this->companyName)) {
            $json['company_name']             = $this->companyName['value'];
        }
        if (!empty($this->contactId)) {
            $json['contact_id']               = $this->contactId['value'];
        }
        if (!empty($this->dateOfBirth)) {
            $json['date_of_birth']            = $this->dateOfBirth['value'];
        }
        if (!empty($this->domainId)) {
            $json['domain_id']                = $this->domainId['value'];
        }
        if (isset($this->email)) {
            $json['email']                    = $this->email;
        }
        if (isset($this->emailTrxReceipt)) {
            $json['email_trx_receipt']        = $this->emailTrxReceipt;
        }
        if (!empty($this->homePhone)) {
            $json['home_phone']               = $this->homePhone['value'];
        }
        if (!empty($this->firstName)) {
            $json['first_name']               = $this->firstName['value'];
        }
        if (isset($this->lastName)) {
            $json['last_name']                = $this->lastName;
        }
        if (!empty($this->locale)) {
            $json['locale']                   = $this->locale['value'];
        }
        if (!empty($this->officePhone)) {
            $json['office_phone']             = $this->officePhone['value'];
        }
        if (!empty($this->officeExtPhone)) {
            $json['office_ext_phone']         = $this->officeExtPhone['value'];
        }
        if (isset($this->primaryLocationId)) {
            $json['primary_location_id']      = $this->primaryLocationId;
        }
        if (!empty($this->requiresNewPassword)) {
            $json['requires_new_password']    = $this->requiresNewPassword['value'];
        }
        if (!empty($this->termsConditionCode)) {
            $json['terms_condition_code']     = $this->termsConditionCode['value'];
        }
        if (isset($this->tz)) {
            $json['tz']                       = $this->tz;
        }
        if (isset($this->uiPrefs)) {
            $json['ui_prefs']                 = $this->uiPrefs;
        }
        if (isset($this->username)) {
            $json['username']                 = $this->username;
        }
        if (!empty($this->userApiKey)) {
            $json['user_api_key']             = $this->userApiKey['value'];
        }
        if (!empty($this->userHashKey)) {
            $json['user_hash_key']            = $this->userHashKey['value'];
        }
        if (isset($this->userTypeCode)) {
            $json['user_type_code']           = UserTypeCodeEnum::checkValue($this->userTypeCode);
        }
        if (!empty($this->password)) {
            $json['password']                 = $this->password['value'];
        }
        if (!empty($this->zip)) {
            $json['zip']                      = $this->zip['value'];
        }
        if (!empty($this->locationId)) {
            $json['location_id']              = $this->locationId['value'];
        }
        if (!empty($this->contactApiId)) {
            $json['contact_api_id']           = $this->contactApiId['value'];
        }
        if (!empty($this->primaryLocationApiId)) {
            $json['primary_location_api_id']  = $this->primaryLocationApiId['value'];
        }
        if (!empty($this->statusCode)) {
            $json['status_code']              = StatusCodeEnum::checkValue($this->statusCode['value']);
        }
        if (isset($this->apiOnly)) {
            $json['api_only']                 = $this->apiOnly;
        }
        if (isset($this->isInvitation)) {
            $json['is_invitation']            = $this->isInvitation;
        }
        if (isset($this->address)) {
            $json['address']                  = $this->address;
        }
        if (isset($this->id)) {
            $json['id']                       = $this->id;
        }
        if (isset($this->status)) {
            $json['status']                   = $this->status;
        }
        if (isset($this->loginAttempts)) {
            $json['login_attempts']           = $this->loginAttempts;
        }
        if (isset($this->lastLoginTs)) {
            $json['last_login_ts']            = $this->lastLoginTs;
        }
        if (isset($this->createdTs)) {
            $json['created_ts']               = $this->createdTs;
        }
        if (isset($this->modifiedTs)) {
            $json['modified_ts']              = $this->modifiedTs;
        }
        if (isset($this->createdUserId)) {
            $json['created_user_id']          = $this->createdUserId;
        }
        if (!empty($this->termsAcceptedTs)) {
            $json['terms_accepted_ts']        = $this->termsAcceptedTs['value'];
        }
        if (!empty($this->termsAgreeIp)) {
            $json['terms_agree_ip']           = $this->termsAgreeIp['value'];
        }
        if (isset($this->currentDateTime)) {
            $json['current_date_time']        = $this->currentDateTime;
        }
        if (!empty($this->currentLoginIp)) {
            $json['current_login_ip']         = $this->currentLoginIp['value'];
        }
        if (!empty($this->currentLogin)) {
            $json['current_login']            = $this->currentLogin['value'];
        }
        if (isset($this->sftpAccess)) {
            $json['sftp_access']              = $this->sftpAccess;
        }
        if (!empty($this->logApiResponseBodyTs)) {
            $json['log_api_response_body_ts'] = $this->logApiResponseBodyTs['value'];
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
