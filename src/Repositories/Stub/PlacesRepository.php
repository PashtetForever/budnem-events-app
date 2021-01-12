<?php

namespace App\Repositories\Stub;

use App\Repositories\Repository;
use Illuminate\Support\Collection;

class PlacesRepository extends Repository
{
    public function __construct()
    {
        $collection = new Collection(json_decode('{"162775": {
        "ID": "162775",
        "NAME": "Центр культуры и отдыха г. Иваново",
        "PROPERTY_LINK_REGION_VALUE": "158056",
        "PROPERTY_LINK_REGION_VALUE_ID": "162775:551",
        "IBLOCK_ID": "51",
        "SORT": "500",
        "region": {
            "ID": "158056",
            "TIMESTAMP_X": "28.09.2020 19:42:19",
            "TIMESTAMP_X_UNIX": "1601311339",
            "MODIFIED_BY": "1",
            "DATE_CREATE": "11.09.2020 20:00:50",
            "DATE_CREATE_UNIX": "1599843650",
            "CREATED_BY": "0",
            "IBLOCK_ID": "27",
            "IBLOCK_SECTION_ID": null,
            "ACTIVE": "Y",
            "ACTIVE_FROM": null,
            "ACTIVE_TO": null,
            "SORT": "500",
            "NAME": "Иваново",
            "PREVIEW_PICTURE": null,
            "PREVIEW_TEXT": "",
            "PREVIEW_TEXT_TYPE": "text",
            "DETAIL_PICTURE": null,
            "DETAIL_TEXT": "",
            "DETAIL_TEXT_TYPE": "text",
            "SEARCHABLE_CONTENT": "ИВАНОВО\r\n\r\n",
            "IN_SECTIONS": "N",
            "SHOW_COUNTER": null,
            "SHOW_COUNTER_START": null,
            "CODE": "",
            "TAGS": "",
            "XML_ID": "158056",
            "EXTERNAL_ID": "158056",
            "TMP_ID": "0",
            "CREATED_USER_NAME": null,
            "DETAIL_PAGE_URL": "",
            "LIST_PAGE_URL": "",
            "CREATED_DATE": "2020.09.11",
            "PROPERTY_MAIN_DOMAIN_VALUE": "ivanovo.budnyam.net",
            "PROPERTY_MAIN_DOMAIN_VALUE_ID": "158056:279",
            "PROPERTY_SORT_REGION_PRICE_VALUE": "component",
            "PROPERTY_SORT_REGION_PRICE_VALUE_ID": "158056:280",
            "PROPERTY_ADDRESS_VALUE": false,
            "PROPERTY_ADDRESS_VALUE_ID": "158056:281",
            "PROPERTY_EMAIL_VALUE": [
                "info@budnyam.net"
            ],
            "PROPERTY_PHONES_VALUE": [
                "+7 (499) 348-28-78"
            ],
            "PROPERTY_PHONES_DESCRIPTION": [
                ""
            ],
            "PROPERTY_DOMAINS_VALUE": [],
            "PROPERTY_DEFAULT_VALUE": null,
            "PROPERTY_DEFAULT_ENUM_ID": null,
            "PROPERTY_DEFAULT_VALUE_ID": "158056:285",
            "PROPERTY_REGION_NAME_DECLINE_RP_VALUE": "Иваново",
            "PROPERTY_REGION_NAME_DECLINE_RP_VALUE_ID": "158056:286",
            "PROPERTY_REGION_NAME_DECLINE_PP_VALUE": "Иваново",
            "PROPERTY_REGION_NAME_DECLINE_PP_VALUE_ID": "158056:287",
            "PROPERTY_REGION_NAME_DECLINE_TP_VALUE": "Иваново",
            "PROPERTY_REGION_NAME_DECLINE_TP_VALUE_ID": "158056:288",
            "PROPERTY_STORES_LINK_VALUE": [
                "component"
            ],
            "PROPERTY_PRICES_LINK_VALUE": [
                "component"
            ],
            "PROPERTY_LOCATION_LINK_VALUE": "168",
            "PROPERTY_LOCATION_LINK_VALUE_ID": "158056:291",
            "PROPERTY_FAVORIT_LOCATION_VALUE": null,
            "PROPERTY_FAVORIT_LOCATION_ENUM_ID": null,
            "PROPERTY_FAVORIT_LOCATION_VALUE_ID": "158056:292",
            "PROPERTY_REGION_TAG_YANDEX_MAP_VALUE": "",
            "PROPERTY_REGION_TAG_YANDEX_MAP_VALUE_ID": "158056:293",
            "PROPERTY_REGION_TAG_SHEDULLE_VALUE": false,
            "PROPERTY_REGION_TAG_SHEDULLE_VALUE_ID": "158056:294",
            "PROPERTY_REGION_TAG_CONTACT_TEXT_VALUE": false,
            "PROPERTY_REGION_TAG_CONTACT_TEXT_VALUE_ID": "158056:295",
            "PROPERTY_TIMEZONE_VALUE": "3",
            "PROPERTY_TIMEZONE_VALUE_ID": "158056:566",
            "LANG_DIR": "/",
            "IBLOCK_TYPE_ID": "aspro_next_regionality",
            "IBLOCK_CODE": "aspro_next_regions",
            "IBLOCK_EXTERNAL_ID": "aspro_next_regions_s1",
            "LID": "s1",
            "PROPERTY_EMAIL_DESCRIPTION": [
                ""
            ],
            "PROPERTY_EMAIL_PROPERTY_VALUE_ID": [
                "349"
            ],
            "PROPERTY_PHONES_PROPERTY_VALUE_ID": [
                "350"
            ],
            "PROPERTY_DOMAINS_DESCRIPTION": [],
            "PROPERTY_DOMAINS_PROPERTY_VALUE_ID": [],
            "PROPERTY_STORES_LINK_DESCRIPTION": [
                ""
            ],
            "PROPERTY_STORES_LINK_PROPERTY_VALUE_ID": [
                "351"
            ],
            "PROPERTY_PRICES_LINK_DESCRIPTION": [
                ""
            ],
            "PROPERTY_PRICES_LINK_PROPERTY_VALUE_ID": [
                "352"
            ]
        }
    }}', true));

        parent::__construct($collection);
    }
}
