<?php

namespace Sun\BelAssist\Enum;

class SecondResponseCodeEnum extends AbstractEnum
{
    const NO_ADDITIONAL_INFORMATION = 0;
    const UNEXPECTED_ERROR = 1;
    const THE_GENERATED_DOCUMENT_IS_TOO_LARGE = 2;
    const INTERFACE_REQUEST_RATE_EXCEEDED = 3;
    const THE_SAMPLING_INTERVAL_IS_TOO_LARGE = 4;
    const KEY_ENCRYPTION_ERROR = 5;
    const KEY_DECRYPTION_ERROR = 6;
    const PARAMETER_MERCHANT_ID = 100;
    const LOGIN_PARAMETER = 101;
    const PASSWORD_PARAMETER = 102;
    const PARAMETER_FORMAT = 103;
    const PARAMETER_DATE = 104;
    const CURRENCY_PARAMETER = 105;
    const PARAMETER_MEANNUMBER = 106;
    const ORDERNUMBER_PARAMETER = 107;
    const PARAMETER_AMOUNT = 108;
    const DELAY_PARAMETER = 109;
    const PARAMETER_COMMENT = 110;
    const PARAMETER_MEANTYPE = 111;
    const EXPIREMONTH_PARAMETER = 112;
    const EXPIREYEAR_PARAMETER = 113;
    const PARAMETER_CARDHOLDER = 114;
    const PARAMETER_CSC2 = 115;
    const CLIENTIP_PARAMETER = 116;
    const LASTNAME_PARAMETER = 117;
    const FIRSTNAME_PARAMETER = 118;
    const MIDDLENAME_PARAMETER = 119;
    const PARAMETER_EMAIL = 120;
    const PARAMETER_ADDRESS = 121;
    const PHONE_PARAMETER = 122;
    const PARAMETER_CITY = 123;
    const STATE_PARAMETER = 124;
    const ZIP_PARAMETER = 125;
    const LIMITTYPE_PARAMETER = 126;
    const LANGUAGE_PARAMETER = 127;
    const COUNTRY_PARAMETER = 128;
    const THE_STARTDAY_AND_OR_STARTMONTH_AND_OR_STARTYEAR_PARAMETERS = 129;
    const ENDDAY_AND_OR_ENDMONTH_AND_OR_ENDYEAR_PARAMETERS = 130;
    const PARAMETER_SUCCESS = 131;
    const ZIPFLAG_PARAMETER = 132;
    const HEADER_PARAMETER = 133;
    const PARAMETER_HEADER1 = 134;
    const DELIMITER_PARAMETER = 135;
    const OPENDELIMITER_PARAMETER = 136;
    const CLOSEDELIMITER_PARAMETER = 137;
    const ROWDELIMITER_PARAMETER = 138;
    const FIELDS_PARAMETER = 139;
    const SSL_OPTION = 140;
    const LOGIN_AND_OR_PASSWORD_PARAMETERS = 141;
    const EXPIREMONTH_AND_OR_EXPIREYEAR_PARAMETERS = 142;
    const PARAMETER_BILLNUMBER = 143;
    const PROTECTCODE_PARAMETER = 144;
    const OPTYPE_PARAMETER = 145;
    const OPSTATE_PARAMETER = 146;
    const PARAMETER_RPSERIES = 147;
    const PARAMETER_RPNUMBER = 148;
    const PARAMETER_PIN = 150;
    const PARAMETER_TICKET_NUMBER_PNR = 153;
    const URL_PARAMETER = 154;
    const PARAMETER_TRANSACT_ID = 155;
    const TID_PARAMETER = 156;
    const MID_PARAMETER = 157;
    const PARAMETER_BIN = 159;
    const BILLINGNUMBER_PARAMETER = 161;
    const PARAMETER_TRANSACTSTATE = 163;
    const ORDERSTATE_PARAMETER = 164;
    const PARAMETER_TRANSACTTYPE = 165;
    const CURRENCY_RATE_PARAMETER = 167;
    const PARAMETER_RESPONSECODE = 170;
    const IP_ADDRESS_PARAMETER = 173;
    const PNR_PARAMETER = 176;
    const PAYMENTMODE_PARAMETER = 177;
    const CHEQUE_PARAMETER = 179;
    const BILLSENDTYPE_PARAMETER = 185;
    const PARAMETER_HASHTYPE = 186;
    const PARAMETER_BILLNO = 187;
    const BILLNOTEMPLATE_PARAMETER = 188;
    const BILL_ID_PARAMETER = 189;
    const BILLSTATE_PARAMETER = 190;
    const OBJECT_ENTERPRISE = 200;
    const OBJECT_ORDER = 201;
    const OBJECT_BUYER = 202;
    const OBJECT_CREDIT_CARD = 203;
    const OBJECT_BANK = 204;
    const OBJECT_PROCESSING = 205;
    const TERMINAL_OBJECT = 206;
    const COUNTRY_OBJECT = 207;
    const OBJECT_CURRENCY = 208;
    const OBJECT_CURRENCY_RATE = 209;
    const OBJECT_COMMISSION = 210;
    const OBJECT_LIMIT = 211;
    const PARAMETER_TESTMODE = 212;
    const PAYMENTTYPE_PARAMETER = 213;
    const TEMPLATE_OBJECT = 214;
    const SOAP_PACKET_OBJECT = 215;
    const OPERATION_OBJECT = 216;
    const OBJECT_TYPE_OF_PAYMENT = 217;
    const OBJECT_PAYMENT_INSTRUMENT = 218;
    const OBJECT_TRANSACTION = 220;
    const USER_OBJECT = 221;
    const OBJECT_LEGAL_ENTITY = 225;
    const OBJECT_COMPANY = 226;
    const OBJECT_ACCOUNT = 228;
    const CANCEL_AUTHORIZATION = 300;
    const REFUND = 301;
    const FINANCIAL_CONFIRMATION = 302;
    const CANCELLATION_OF_FINANCIAL_TRANSACTION = 305;
    const PAYMENT_TRANSACTION = 306;
    const CONFIRMATION_OPERATION = 307;
    const UNDO_OPERATION = 308;
    const ACCOUNT_CANCELLATION_OPERATION = 309;
    const RECURRING_PAYMENT = 320;
    const WEB_SERVICE = 350;
    const DIRECTORY_SERVER_ERROR = 400;
    const WAITING_FOR_3D_SECURE_AUTHORIZATION = 402;
    const AUTHORIZATION_DENIED_DS = 403;

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
