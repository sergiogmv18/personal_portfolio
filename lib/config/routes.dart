import 'package:flutter/material.dart';
import 'package:go_router/go_router.dart';
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
      name: 'home',
      path: '/',
      builder: (BuildContext context, GoRouterState state) {
        return const HomeScreen();
      },
      routes: <RouteBase>[
        GoRoute(
          name: 'works',
          path: 'works',
          builder: (BuildContext context, GoRouterState state) {
            return const WorkScreen();
          },
        ),
 
        GoRoute(
          name: 'contacts',
          path: 'contacts',
          builder: (BuildContext context, GoRouterState state) {
            return const ContactScreen();
          },
        ),
        GoRoute(
          name: 'error',
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