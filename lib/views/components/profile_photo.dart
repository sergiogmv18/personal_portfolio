import 'package:flutter/material.dart';
import 'package:personal_portfolio/config/constants.dart';
import 'package:personal_portfolio/config/responsive.dart';
import 'package:personal_portfolio/config/style/custom_color.dart';

class ProfilePhoto extends StatelessWidget {
  const ProfilePhoto({super.key});

  @override
  Widget build(BuildContext context) {
    return Container(
      decoration: BoxDecoration(
        shape:BoxShape.circle,
        border:Border.all(
          width:0.7, 
          color: CustomColor.white
        ),
        image:DecorationImage(
          image: AssetImage(ImageAssets.profile),
          fit: BoxFit.fitHeight,
        )
      ),
      width:Responsive.isDesktop(context) ? 200 : 100,
      height:Responsive.isDesktop(context) ? 200 : 100,
      padding: EdgeInsets.all(3),
    );
  }
}