import 'package:flutter/material.dart';
import 'package:go_router/go_router.dart';
import 'package:personal_portfolio/config/constants.dart';
import 'package:personal_portfolio/config/style/custom_color.dart';
import 'package:personal_portfolio/controllers/translation_controller.dart';
import 'package:provider/provider.dart';


class HeaderMenu extends StatelessWidget {
  const HeaderMenu({
    super.key,
    required this.title,
    required this.press,
  });
  final String title;
  final VoidCallback press;
  @override
  Widget build(BuildContext context) {
    return InkWell(
      onTap: press,
      child: SizedBox(
        child: Text(
          title,
          style:Theme.of(context).textTheme.titleLarge!.copyWith(color: CustomColor.white, fontWeight: FontWeight.normal),
        ),
      ),
    );
  }
}

class MobMenu extends StatefulWidget {
  const MobMenu({super.key});

  @override
  MobMenuState createState() => MobMenuState();
}

class MobMenuState extends State<MobMenu> {
  @override
  Widget build(BuildContext context) {
    final displayLocal = Provider.of<LocaleFixed>(context).locale;
    return Padding(
      padding: const EdgeInsets.symmetric(horizontal: 10.0),
      child: Column(
        crossAxisAlignment: CrossAxisAlignment.start,
        children: [
           HeaderMenu(
            press: () {
              context.goNamed('home');
            },
            title: translate('home', locale:displayLocal),
          ),
          const SizedBox(
            height: kPadding,
          ),
          HeaderMenu(
            press: () {
              context.goNamed('vehicles');
            },
            title: translate('inventory', locale:displayLocal),
          ),
          const SizedBox(
            height: kPadding,
          ),
          HeaderMenu(
            press: () {
              context.goNamed('services');
            },
            title: translate('services', locale:displayLocal),
          ),
          const SizedBox(
            height: kPadding,
          ),
        ],
      ),
    );
  }
}
