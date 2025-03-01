# PostGaebDestinationOptions

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**destination_gaeb_type** | [**\Dangl\AVACloud\Model\DestinationGaebType**](DestinationGaebType.md) | Defaults to GAEB XML V3.2 | 
**target_exchange_phase_transform** | [**\Dangl\AVACloud\Model\DestinationGaebExchangePhase**](DestinationGaebExchangePhase.md) | Defaults to none, meaning no transformation will be done | 
**enforce_strict_offer_phase_long_text_output** | **bool** | Defaults to false. If this is enabled, exported long texts to GAEB XML that use text additions will be strictly schema compliant. If this is not enabled, any text that is marked to contain a text addition is exported in full to ensure that incorrectly used text additions are still preserved in the export. | 
**export_quantity_determination** | **bool** | Defaults to false. If this is enabled, quantities are exported in detail in GAEB XML targets via the &#39;QtyDeterm&#39; (Quantity Determination, or Quantity Take Off) fields. To control this, you can set custom quantity calculations in the &#39;QuantityComponents&#39; property of positions. Please see the entry for &#39;Quantity Determination&#39; in the Dangl.AVA HowTo documentation section. Please be advised that enabling this might export data that was not intended to be exported, like internal quantity calculation details, depending on what data you put in the &#39;QuantityComponents&#39; property. | 
**remove_unprintable_characters_from_texts** | **bool** | If this is enabled, unprintable characters are removed from text elements. Otherwise, the conversion might fail in case some text content contains characters that are not allowed in XML output formats. | 
**force_include_descriptions** | **bool** | If this is enabled, all description elements like texts and execution descriptions will be output to the result. This is mostly only applicable to GAEB exports to phase 84 - Offer, which does typically not include descriptions. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


