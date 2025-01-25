import 'package:flutter/material.dart';
import 'package:flutter/services.dart';
import 'package:personal_portfolio/config/constants.dart';
import 'package:personal_portfolio/config/style/custom_color.dart';

class TextFormFieldCustom extends StatelessWidget {
  final TextEditingController? controller;
  final Widget? suffixIcon;
  final bool enabled;
  final bool autoFocus;
  final String? initialValue;
  final Function(String?)? onSaved;
  final String? labelText;
  final Function(String)? onChanged;
  final String? Function(String?)? validator;
  final TextInputType keyboardType;
  final TextInputAction textInputAction;
  final List<TextInputFormatter>? inputFormatters;
  final void Function()? onTap;
  final Function(String)? onFieldSubmitted;
  final  FocusNode? focusNode;
  final int? maxLines;

  const TextFormFieldCustom({
    super.key,
    this.controller,
    this.suffixIcon,
    this.enabled = true,
    this.autoFocus = false,
    this.initialValue,
    this.onSaved,
    this.labelText,
    this.inputFormatters,
    this.onChanged,
    this.validator,
    this.onTap,
    this.focusNode,
    this.onFieldSubmitted,
    this.keyboardType = TextInputType.name,
    this.textInputAction = TextInputAction.next,
    this.maxLines,
  });

  @override
  Widget build(BuildContext context) {
    return TextFormField(
      textInputAction: textInputAction,
      keyboardType: keyboardType,
      focusNode: focusNode,
      inputFormatters: inputFormatters,
    // textAlign: TextAlign.center,
      controller: controller,
      maxLines: maxLines,
      initialValue: initialValue,
      style: Theme.of(context).textTheme.titleSmall,
      enabled: enabled,
      autofocus: autoFocus,
      onFieldSubmitted:onFieldSubmitted,
      decoration: InputDecoration(
      // suffixIcon: suffixIcon,
        contentPadding: const EdgeInsets.fromLTRB(6, 0, 0, 0),
        labelText: labelText,
        labelStyle: Theme.of(context).textTheme.titleSmall!.copyWith(color: CustomColor.white),
        fillColor: CustomColor.yellow,
        filled: true,
        suffixIcon: suffixIcon,
        errorStyle: Theme.of(context).textTheme.bodySmall!.copyWith(color: Theme.of(context).colorScheme.error),
       // hintText: labelText,
        hintStyle: Theme.of(context).textTheme.titleSmall,
        border:const OutlineInputBorder(borderRadius: BorderRadius.all(Radius.circular(kBorderRadius)), borderSide: BorderSide(color:  CustomColor.white, width: 1)),
        enabledBorder:const OutlineInputBorder(borderRadius: BorderRadius.all(Radius.circular(kBorderRadius)), borderSide: BorderSide(color: CustomColor.black, width: 1)),
        disabledBorder:const OutlineInputBorder(borderRadius: BorderRadius.all(Radius.circular(kBorderRadius)), borderSide: BorderSide(color: CustomColor.black, width: 1)),
        focusedBorder:const OutlineInputBorder(borderRadius: BorderRadius.all(Radius.circular(kBorderRadius)), borderSide: BorderSide(color: CustomColor.black, width: 1)),
        errorBorder:const OutlineInputBorder(borderRadius: BorderRadius.all(Radius.circular(kBorderRadius)), borderSide:  BorderSide(color: CustomColor.errorCode, width: 1)),
      ),
      onTap: onTap,
      onChanged: onChanged,
      validator: validator,
      onSaved: onSaved
    );
  }
}