import 'package:flutter/material.dart';
import 'package:personal_portfolio/config/constants.dart';
import 'package:personal_portfolio/config/style/custom_color.dart';

class CustomButton extends StatelessWidget {
  final void Function()? onPressed;
  final Widget child;
  const CustomButton({super.key, required this.onPressed, required this.child});

  @override
  Widget build(BuildContext context) {
    return TextButton(
      onPressed:onPressed,
      style: ButtonStyle(
        padding: WidgetStateProperty.all(EdgeInsets.symmetric(vertical: 15, horizontal: 30)),
        backgroundColor: WidgetStateProperty.all(CustomColor.color3),
        shape: WidgetStateProperty.all(
          RoundedRectangleBorder(borderRadius: BorderRadius.circular(kBorderRadius)),
        ),
      ),
      child:child,
    );
  }
}