# # Pricing

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**price_type** | **string** | Price breakdown on either purchase or sales and including or excluding tax. | [readonly]
**price_currency_code** | **string** | Price currency code. According to [ISO-4217](https://en.wikipedia.org/wiki/ISO_4217).  Defaults to the base currency of your account. | [optional] [readonly]
**price_currency_rate** | **string** | **(ADVANCED)** Optional alternative currency conversion rate.   If not set and an alternative &#x60;price_currency_code&#x60; is provided, the latest rates from the Currency API will be used. &gt; Alternative rates can only be provided on (re)sales, purchase exchange rates are fixed. | [optional] [readonly]
**price_subtotal** | **string** | Sum of &#x60;product_type_list_price&#x60; for all &#x60;product_types&#x60; including extra options, without promocodes, price variations and additional fees (&#x60;fee_included:true&#x60;). | [readonly]
**price_variations** | [**\PrioTicket\DistributorAPI\Models\PriceVariations[]**](PriceVariations.md) | All applicable price variations (&#x60;product_quantity_pricing&#x60;, &#x60;product_daily_pricing&#x60;, &#x60;product_dynamic_pricing&#x60; and more).  Some variations are set automatically based on your request and the selected products, such as quantity and dynamic pricing, whereas other variations can be set manually (e.g cart and partner discount). | [optional]
**price_promocodes** | [**\PrioTicket\DistributorAPI\Models\PromoCodePricing[]**](PromoCodePricing.md) | Applied promocodes pricing.   Only applicable in case of &#x60;price_type:SALES_GROSS/SALES_NET&#x60;. | [optional] [readonly]
**price_taxes** | [**\PrioTicket\DistributorAPI\Models\ProductTax[]**](ProductTax.md) | Product tax breakdown.   Already included in the price breakdown in case &#x60;price_type:PURCHASE_GROSS/SALES_GROSS&#x60;, otherwise excluded. Taxes on fees are listed separately in &#x60;price_fees&#x60;. | [optional] [readonly]
**price_fees** | [**\PrioTicket\DistributorAPI\Models\Fee[]**](Fee.md) | List of additional fees.   Additional fees (&#x60;fee_included:true&#x60;) should be included in the &#x60;price_total&#x60;.   Note that some fees are only visible to certain users. | [optional] [readonly]
**price_margins** | [**\PrioTicket\DistributorAPI\Models\Margin[]**](Margin.md) | Margin breakdown (informational only). Note that some margins are only visible to certain users. | [optional] [readonly]
**price_total** | **string** | The total sales / purchase price including all discounts, surcharges and fees above. | [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
