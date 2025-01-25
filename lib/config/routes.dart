import 'package:flutter/material.dart';
import 'package:go_router/go_router.dart';
import 'package:personal_portfolio/config/constants.dart';
import 'package:personal_portfolio/views/contact/contact_screen.dart';
import 'package:personal_portfolio/views/error_screen.dart';
import 'package:personal_portfolio/views/home/home_screen.dart';
import 'package:personal_portfolio/views/works/work_screen.dart';

class RoutesApp{
  final GoRouter routeConfig = GoRouter(
  initialLocation: '/',
  errorBuilder: ((context, state) => const ErrorScreen()),
  routes: <RouteBase>[
    GoRoute(
      name: RoutesPath.routeHome,
      path: '/',
      builder: (BuildContext context, GoRouterState state) {
        // WidgetsBinding.instance.addPostFrameCallback((_) {
        //   // Update the PageIndexProvider after the current build phase
        //   Provider.of<PageIndexProvider>(context, listen: false).index = PageIndex.homeScreen;
        // });
        return const HomeScreen();
      },
      routes: <RouteBase>[
        GoRoute(
          name: RoutesPath.routeWorks,
          path: 'works',
          builder: (BuildContext context, GoRouterState state) {
            // WidgetsBinding.instance.addPostFrameCallback((_) {
            //   Provider.of<PageIndexProvider>(context, listen: false).index = PageIndex.worksScreen;
            // });
            return const WorkScreen();
          },
        ),
 
        GoRoute(
          name: RoutesPath.routeContact,
          path: 'contacts',
          builder: (BuildContext context, GoRouterState state) {
            // WidgetsBinding.instance.addPostFrameCallback((_) {
            //   Provider.of<PageIndexProvider>(context, listen: false).index = PageIndex.contactScreen;
            // });
            return const ContactScreen();
          },
        ),
        GoRoute(
          name: RoutesPath.routeError,
          path: 'page_no_found',
          builder: (BuildContext context, GoRouterState state) {
            return const ErrorScreen();
          },
        ),
      ],
    ),
  ],
);
}