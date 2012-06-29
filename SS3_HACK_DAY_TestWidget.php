<?php

class SS3_HACK_DAY_TestWidget extends Widget {
	
	static $db = array(
	);
	
	static $defaults = array(
	);
	
	static $title = "(Its not really a widget)";
	static $cmsTitle = "SS3_HACK_DAY_TestWidget";
	static $description = "This is just to test each form field in silverstripe to check it works in SS3.";

		
	function getCMSFields() {
		return new FieldList(
			new AjaxUniqueTextField("AjaxUniqueTextField","Ajax Unique Text Field","Title","SiteTree"),
		
			new CheckboxField("CheckboxField"),
			new CheckboxSetField("CheckboxSetField", "CheckboxSetField", array("CheckboxSetField1","CheckboxSetField2","CheckboxSetField3")),
			//new ComplexTableField(),
			new CompositeField(
				new TextField("CompositeField","TextField IN A CompositeField")
			),
			new ConfirmedPasswordField("ConfirmedPasswordField"),
			new CreditCardField("CreditCardField"),
			new CurrencyField("CurrencyField"),
			new DatalessField("DatalessField"),
			new DateField("DateField"),
			new DatetimeField("DatetimeField"),
			new DropdownField("DropdownField","DropdownField",array("DropdownField1","DropdownField2","DropdownField3")),
			new EmailField("EmailField"),
			new FieldGroup(
				new TextField("FieldGroup1","TextField1 IN A FieldGroup"),
				new TextField("FieldGroup2","TextField2 IN A FieldGroup")
			),
		/**
			new FieldList(array(
				new TextField("FieldList1","TextField1 IN A FieldList"),
				new TextField("FieldList2","TextField2 IN A FieldList")
			))
		**/
		/**
		**/
			
			new FileField("FileField"),
			//@deprecated new FileIFrameField(),
			new GroupedDropdownField("GroupedDropdownField","GroupedDropdownField",array("GroupedDropdownField1","GroupedDropdownField2","GroupedDropdownField3")),
			//@deprecated new HasManyComplexTableField(),
			//@deprecated new HasOneComplexTableField(),
			new HeaderField("HeaderField"),
			new HiddenField("HiddenField"),
			//new HtmlEditorConfig(),
			new HtmlEditorField("HtmlEditorField"),
			//@deprecated new ImageField(),
			//new ImageFormAction(),
			//new InlineFormAction(),
			new LabelField("LabelField","LabelField"),
			new ListboxField("ListboxField","ListboxField",array("ListboxField1","ListboxField2","ListboxField3")),
			new LiteralField("LiteralField","LiteralField"),
			new LookupField("LookupField","LookupField",array("LookupField1","LookupField2","LookupField3")),
			//@deprecated new ManyManyComplexTableField(),
		/**
			new MemberDatetimeOptionsetField("MemberDatetimeOptionsetField","MemberDatetimeOptionsetField",array("MemberDatetimeOptionsetField1","MemberDatetimeOptionsetField2","MemberDatetimeOptionsetField3")),
		**/
			new MoneyField("MoneyField"),
			//new NestedForm("NestedForm"),
			//new NullableField("NullableField"),
			new NumericField("NumericField"),
			new OptionsetField("OptionsetField"),
			new PasswordField("PasswordField"),
			new PhoneNumberField("PhoneNumberField"),
			// new PrintableTransformation("PrintableTransformation"),
			new ReadonlyField("ReadonlyField"),
			//new ReadonlyTransformation("ReadonlyTransformation"),
			//new RequiredFields("RequiredFields"),
			//new ResetFormAction("ResetFormAction"),
			//new SelectionGroup("SelectionGroup"),
			//@deprecated new SimpleImageField("SimpleImageField"),
			//new Tab("Tab"),
			//new TabSet("TabSet"),
		//new TableField("TableField","SiteTree"),
			//new TabularStyle("TabularStyle"),
			new TextField("TextField"),
			new TextareaField("TextareaField"),
			new TimeField("TimeField"),
		//new ToggleCompositeField("ToggleCompositeField"),
			new ToggleField("ToggleField")
		/**
			new TreeDropdownField("TreeDropdownField")
		**/
		/**
			new UploadField("UploadField")
		**/
			//new Validator("Validator"),
		);
	}
}
