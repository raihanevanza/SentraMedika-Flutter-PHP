import 'package:curved_navigation_bar/curved_navigation_bar.dart';
import 'package:sentramedika/info_screen.dart';
import 'package:sentramedika/screen/jadwal_list.dart';
import 'package:sentramedika/screen/layanan.dart';
import 'package:sentramedika/screen/user_list.dart';
import 'package:flutter/material.dart';

class MainScreen extends StatefulWidget {
  @override
  _MainScreen createState() => _MainScreen();
}

class _MainScreen extends State<MainScreen> {
  int selectedIndex = 0;
  final Screen = [InfoScreen(), Home(), ListJadwal(), Layanan()];

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      bottomNavigationBar: CurvedNavigationBar(
        index: selectedIndex,
        items: [
          Icon(
            Icons.home,
            size: 30,
          ),
          Icon(
            Icons.medication,
            size: 30,
          ),
          Icon(
            Icons.event,
            size: 30,
          ),
          Icon(
            Icons.medical_services,
            size: 30,
          ),
        ],
        onTap: (index) {
          setState(() {
            selectedIndex = index;
          });
        },
        animationCurve: Curves.easeInBack,
        animationDuration: const Duration(milliseconds: 300),
      ),
      body: Screen[selectedIndex],
    );
  }
}
