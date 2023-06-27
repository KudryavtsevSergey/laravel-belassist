<?php

declare(strict_types=1);

namespace Sun\BelAssist\Enum;

class SecondResponseCodeEnum extends AbstractEnum
{
    public const NO_ADDITIONAL_INFORMATION = 0;
    public const UNEXPECTED_ERROR = 1;
    public const THE_GENERATED_DOCUMENT_IS_TOO_LARGE = 2;
    public const INTERFACE_REQUEST_RATE_EXCEEDED = 3;
    public const THE_SAMPLING_INTERVAL_IS_TOO_LARGE = 4;
    public const KEY_ENCRYPTION_ERROR = 5;
    public const KEY_DECRYPTION_ERROR = 6;
    public const PARAMETER_MERCHANT_ID = 100;
    public const LOGIN_PARAMETER = 101;
    public const PASSWORD_PARAMETER = 102;
    public const PARAMETER_FORMAT = 103;
    public const PARAMETER_DATE = 104;
    public const CURRENCY_PARAMETER = 105;
    public const PARAMETER_MEANNUMBER = 106;
    public const ORDERNUMBER_PARAMETER = 107;
    public const PARAMETER_AMOUNT = 108;
    public const DELAY_PARAMETER = 109;
    public const PARAMETER_COMMENT = 110;
    public const PARAMETER_MEANTYPE = 111;
    public const EXPIREMONTH_PARAMETER = 112;
    public const EXPIREYEAR_PARAMETER = 113;
    public const PARAMETER_CARDHOLDER = 114;
    public const PARAMETER_CSC2 = 115;
    public const CLIENTIP_PARAMETER = 116;
    public const LASTNAME_PARAMETER = 117;
    public const FIRSTNAME_PARAMETER = 118;
    public const MIDDLENAME_PARAMETER = 119;
    public const PARAMETER_EMAIL = 120;
    public const PARAMETER_ADDRESS = 121;
    public const PHONE_PARAMETER = 122;
    public const PARAMETER_CITY = 123;
    public const STATE_PARAMETER = 124;
    public const ZIP_PARAMETER = 125;
    public const LIMITTYPE_PARAMETER = 126;
    public const LANGUAGE_PARAMETER = 127;
    public const COUNTRY_PARAMETER = 128;
    public const THE_STARTDAY_AND_OR_STARTMONTH_AND_OR_STARTYEAR_PARAMETERS = 129;
    public const ENDDAY_AND_OR_ENDMONTH_AND_OR_ENDYEAR_PARAMETERS = 130;
    public const PARAMETER_SUCCESS = 131;
    public const ZIPFLAG_PARAMETER = 132;
    public const HEADER_PARAMETER = 133;
    public const PARAMETER_HEADER1 = 134;
    public const DELIMITER_PARAMETER = 135;
    public const OPENDELIMITER_PARAMETER = 136;
    public const CLOSEDELIMITER_PARAMETER = 137;
    public const ROWDELIMITER_PARAMETER = 138;
    public const FIELDS_PARAMETER = 139;
    public const SSL_OPTION = 140;
    public const LOGIN_AND_OR_PASSWORD_PARAMETERS = 141;
    public const EXPIREMONTH_AND_OR_EXPIREYEAR_PARAMETERS = 142;
    public const PARAMETER_BILLNUMBER = 143;
    public const PROTECTCODE_PARAMETER = 144;
    public const OPTYPE_PARAMETER = 145;
    public const OPSTATE_PARAMETER = 146;
    public const PARAMETER_RPSERIES = 147;
    public const PARAMETER_RPNUMBER = 148;
    public const PARAMETER_PIN = 150;
    public const PARAMETER_TICKET_NUMBER_PNR = 153;
    public const URL_PARAMETER = 154;
    public const PARAMETER_TRANSACT_ID = 155;
    public const TID_PARAMETER = 156;
    public const MID_PARAMETER = 157;
    public const PARAMETER_BIN = 159;
    public const BILLINGNUMBER_PARAMETER = 161;
    public const PARAMETER_TRANSACTSTATE = 163;
    public const ORDERSTATE_PARAMETER = 164;
    public const PARAMETER_TRANSACTTYPE = 165;
    public const CURRENCY_RATE_PARAMETER = 167;
    public const PARAMETER_RESPONSECODE = 170;
    public const IP_ADDRESS_PARAMETER = 173;
    public const PNR_PARAMETER = 176;
    public const PAYMENTMODE_PARAMETER = 177;
    public const CHEQUE_PARAMETER = 179;
    public const BILLSENDTYPE_PARAMETER = 185;
    public const PARAMETER_HASHTYPE = 186;
    public const PARAMETER_BILLNO = 187;
    public const BILLNOTEMPLATE_PARAMETER = 188;
    public const BILL_ID_PARAMETER = 189;
    public const BILLSTATE_PARAMETER = 190;
    public const OBJECT_ENTERPRISE = 200;
    public const OBJECT_ORDER = 201;
    public const OBJECT_BUYER = 202;
    public const OBJECT_CREDIT_CARD = 203;
    public const OBJECT_BANK = 204;
    public const OBJECT_PROCESSING = 205;
    public const TERMINAL_OBJECT = 206;
    public const COUNTRY_OBJECT = 207;
    public const OBJECT_CURRENCY = 208;
    public const OBJECT_CURRENCY_RATE = 209;
    public const OBJECT_COMMISSION = 210;
    public const OBJECT_LIMIT = 211;
    public const PARAMETER_TESTMODE = 212;
    public const PAYMENTTYPE_PARAMETER = 213;
    public const TEMPLATE_OBJECT = 214;
    public const SOAP_PACKET_OBJECT = 215;
    public const OPERATION_OBJECT = 216;
    public const OBJECT_TYPE_OF_PAYMENT = 217;
    public const OBJECT_PAYMENT_INSTRUMENT = 218;
    public const OBJECT_TRANSACTION = 220;
    public const USER_OBJECT = 221;
    public const OBJECT_LEGAL_ENTITY = 225;
    public const OBJECT_COMPANY = 226;
    public const OBJECT_ACCOUNT = 228;
    public const CANCEL_AUTHORIZATION = 300;
    public const REFUND = 301;
    public const FINANCIAL_CONFIRMATION = 302;
    public const CANCELLATION_OF_FINANCIAL_TRANSACTION = 305;
    public const PAYMENT_TRANSACTION = 306;
    public const CONFIRMATION_OPERATION = 307;
    public const UNDO_OPERATION = 308;
    public const ACCOUNT_CANCELLATION_OPERATION = 309;
    public const RECURRING_PAYMENT = 320;
    public const WEB_SERVICE = 350;
    public const DIRECTORY_SERVER_ERROR = 400;
    public const WAITING_FOR_3D_SECURE_AUTHORIZATION = 402;
    public const AUTHORIZATION_DENIED_DS = 403;

    public static function getValues(): array
    {
        return [
            self::NO_ADDITIONAL_INFORMATION,
            self::UNEXPECTED_ERROR,
            self::THE_GENERATED_DOCUMENT_IS_TOO_LARGE,
            self::INTERFACE_REQUEST_RATE_EXCEEDED,
            self::THE_SAMPLING_INTERVAL_IS_TOO_LARGE,
            self::KEY_ENCRYPTION_ERROR,
            self::KEY_DECRYPTION_ERROR,
            self::PARAMETER_MERCHANT_ID,
            self::LOGIN_PARAMETER,
            self::PASSWORD_PARAMETER,
            self::PARAMETER_FORMAT,
            self::PARAMETER_DATE,
            self::CURRENCY_PARAMETER,
            self::PARAMETER_MEANNUMBER,
            self::ORDERNUMBER_PARAMETER,
            self::PARAMETER_AMOUNT,
            self::DELAY_PARAMETER,
            self::PARAMETER_COMMENT,
            self::PARAMETER_MEANTYPE,
            self::EXPIREMONTH_PARAMETER,
            self::EXPIREYEAR_PARAMETER,
            self::PARAMETER_CARDHOLDER,
            self::PARAMETER_CSC2,
            self::CLIENTIP_PARAMETER,
            self::LASTNAME_PARAMETER,
            self::FIRSTNAME_PARAMETER,
            self::MIDDLENAME_PARAMETER,
            self::PARAMETER_EMAIL,
            self::PARAMETER_ADDRESS,
            self::PHONE_PARAMETER,
            self::PARAMETER_CITY,
            self::STATE_PARAMETER,
            self::ZIP_PARAMETER,
            self::LIMITTYPE_PARAMETER,
            self::LANGUAGE_PARAMETER,
            self::COUNTRY_PARAMETER,
            self::THE_STARTDAY_AND_OR_STARTMONTH_AND_OR_STARTYEAR_PARAMETERS,
            self::ENDDAY_AND_OR_ENDMONTH_AND_OR_ENDYEAR_PARAMETERS,
            self::PARAMETER_SUCCESS,
            self::ZIPFLAG_PARAMETER,
            self::HEADER_PARAMETER,
            self::PARAMETER_HEADER1,
            self::DELIMITER_PARAMETER,
            self::OPENDELIMITER_PARAMETER,
            self::CLOSEDELIMITER_PARAMETER,
            self::ROWDELIMITER_PARAMETER,
            self::FIELDS_PARAMETER,
            self::SSL_OPTION,
            self::LOGIN_AND_OR_PASSWORD_PARAMETERS,
            self::EXPIREMONTH_AND_OR_EXPIREYEAR_PARAMETERS,
            self::PARAMETER_BILLNUMBER,
            self::PROTECTCODE_PARAMETER,
            self::OPTYPE_PARAMETER,
            self::OPSTATE_PARAMETER,
            self::PARAMETER_RPSERIES,
            self::PARAMETER_RPNUMBER,
            self::PARAMETER_PIN,
            self::PARAMETER_TICKET_NUMBER_PNR,
            self::URL_PARAMETER,
            self::PARAMETER_TRANSACT_ID,
            self::TID_PARAMETER,
            self::MID_PARAMETER,
            self::PARAMETER_BIN,
            self::BILLINGNUMBER_PARAMETER,
            self::PARAMETER_TRANSACTSTATE,
            self::ORDERSTATE_PARAMETER,
            self::PARAMETER_TRANSACTTYPE,
            self::CURRENCY_RATE_PARAMETER,
            self::PARAMETER_RESPONSECODE,
            self::IP_ADDRESS_PARAMETER,
            self::PNR_PARAMETER,
            self::PAYMENTMODE_PARAMETER,
            self::CHEQUE_PARAMETER,
            self::BILLSENDTYPE_PARAMETER,
            self::PARAMETER_HASHTYPE,
            self::PARAMETER_BILLNO,
            self::BILLNOTEMPLATE_PARAMETER,
            self::BILL_ID_PARAMETER,
            self::BILLSTATE_PARAMETER,
            self::OBJECT_ENTERPRISE,
            self::OBJECT_ORDER,
            self::OBJECT_BUYER,
            self::OBJECT_CREDIT_CARD,
            self::OBJECT_BANK,
            self::OBJECT_PROCESSING,
            self::TERMINAL_OBJECT,
            self::COUNTRY_OBJECT,
            self::OBJECT_CURRENCY,
            self::OBJECT_CURRENCY_RATE,
            self::OBJECT_COMMISSION,
            self::OBJECT_LIMIT,
            self::PARAMETER_TESTMODE,
            self::PAYMENTTYPE_PARAMETER,
            self::TEMPLATE_OBJECT,
            self::SOAP_PACKET_OBJECT,
            self::OPERATION_OBJECT,
            self::OBJECT_TYPE_OF_PAYMENT,
            self::OBJECT_PAYMENT_INSTRUMENT,
            self::OBJECT_TRANSACTION,
            self::USER_OBJECT,
            self::OBJECT_LEGAL_ENTITY,
            self::OBJECT_COMPANY,
            self::OBJECT_ACCOUNT,
            self::CANCEL_AUTHORIZATION,
            self::REFUND,
            self::FINANCIAL_CONFIRMATION,
            self::CANCELLATION_OF_FINANCIAL_TRANSACTION,
            self::PAYMENT_TRANSACTION,
            self::CONFIRMATION_OPERATION,
            self::UNDO_OPERATION,
            self::ACCOUNT_CANCELLATION_OPERATION,
            self::RECURRING_PAYMENT,
            self::WEB_SERVICE,
            self::DIRECTORY_SERVER_ERROR,
            self::WAITING_FOR_3D_SECURE_AUTHORIZATION,
            self::AUTHORIZATION_DENIED_DS,
        ];
    }
}
