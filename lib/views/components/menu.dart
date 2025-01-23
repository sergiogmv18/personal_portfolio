import 'package:flutter/material.dart';
import 'package:font_awesome_flutter/font_awesome_flutter.dart';
import 'package:go_router/go_router.dart';
import 'package:personal_portfolio/config/constants.dart';
import 'package:personal_portfolio/config/responsive.dart';
import 'package:personal_portfolio/config/style/custom_color.dart';
import 'package:personal_portfolio/controllers/translation_controller.dart';
import 'package:provider/provider.dart';



class HeaderMenu extends StatelessWidget {
  const HeaderMenu({
    super.key,
    required this.title,
    required this.press,
    required this.selected,
    this.icon


  });
  final String title;
  final VoidCallback press;
  final bool selected;
  final Widget? icon;
  @override
  Widget build(BuildContext context) {
    return InkWell(
      onTap: press,
      child:Responsive.isDesktop(context) ? SizedBox(
        child: Text(
          title,
          style:Theme.of(context).textTheme.titleMedium!.copyWith(
            color: selected ? CustomColor.cardsColors : CustomColor.white,
           // fontWeight: FontWeight.normal
          ),
        ),
      ) : Row(
        crossAxisAlignment: CrossAxisAlignment.start,
        spacing: 10,
        children: [
          icon!,
          Text(
            title,
            style:Theme.of(context).textTheme.titleLarge!.copyWith(
              color: selected ? CustomColor.cardsColors : CustomColor.white,
              fontWeight: FontWeight.normal
            ),
          ),
        ]
      ),
    );
  }
}

class MobMenu extends StatelessWidget {
  final Locale displayLocal;
  final int? index;
  const MobMenu({super.key, required this.displayLocal, this.index});
  @override
  Widget build(BuildContext context) {
    return Container(
      height:  MediaQuery.of(context).size.height - 70,
      color: CustomColor.color1,
      padding: const EdgeInsets.symmetric(horizontal: 10.0, vertical: 10.0),
      child: Column(
        crossAxisAlignment: CrossAxisAlignment.start,
        mainAxisSize: MainAxisSize.max,
        spacing: kPadding,
        children: [
           HeaderMenu(
            press: () {
              context.goNamed(RoutesPath.routeHome); 
            },
            title: translate('home', locale:displayLocal),
            selected:index == PageIndex.homeScreen,
            icon: FaIcon(
              FontAwesomeIcons.house, 
              size: Theme.of(context).textTheme.titleLarge!.fontSize, 
              color:index == PageIndex.homeScreen ? CustomColor.cardsColors : CustomColor.white ,
            ),
          ),

          HeaderMenu(
            press: () {
              context.goNamed(RoutesPath.routeWorks); 
            },
            title: translate('works', locale:displayLocal),
            selected: index == PageIndex.worksScreen,
            icon: FaIcon(
              FontAwesomeIcons.code, 
              size: Theme.of(context).textTheme.titleLarge!.fontSize, 
              color:index == PageIndex.worksScreen ? CustomColor.cardsColors : CustomColor.white ,
            ),
          ),
          HeaderMenu(
            press: () {
              context.goNamed(RoutesPath.routeContact);  
            },
            title: translate('contact', locale:displayLocal),
            selected: index == PageIndex.contactScreen,
            icon: FaIcon(
              FontAwesomeIcons.user, 
              size: Theme.of(context).textTheme.titleLarge!.fontSize, 
              color:index ==  PageIndex.contactScreen ? CustomColor.cardsColors : CustomColor.white ,
            ),
          ),
        ],
      ),
    );
  }
}

class HeaderWebMenu extends StatelessWidget {
  final Locale displayLocal;
  final int? index;
  const HeaderWebMenu({super.key, required this.displayLocal, this.index});
  @override
  Widget build(BuildContext context) {
    return Row(
      spacing: kPadding,
      children: [
        HeaderMenu(
          press: () {
            context.goNamed(RoutesPath.routeHome);
          },
          title: translate('home', locale: displayLocal),
          selected:index == PageIndex.homeScreen,
        ),
        HeaderMenu(
          press: () {
            context.goNamed(RoutesPath.routeWorks);
          },
          title: translate('works', locale: displayLocal),
          selected:index == PageIndex.worksScreen,
        ),
        HeaderMenu(
          press: () {
            context.goNamed(RoutesPath.routeContact);
          },
          title: translate('contact', locale: displayLocal),
          selected:index == PageIndex.contactScreen,
        ),
      ],
    );
  }
}
