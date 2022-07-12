import 'package:flutter/material.dart';
import 'package:sentramedika/model/obat.dart';
import 'package:sentramedika/service/user_service.dart';
import 'package:sentramedika/util/capitalize.dart';
// import 'package:cached_network_image/cached_network_image.dart';

class Home extends StatefulWidget {
  @override
  _HomeState createState() => _HomeState();
}

class _HomeState extends State<Home> {
  UserApiService apiService;

  @override
  void initState() {
    super.initState();
    apiService = UserApiService();
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text("Data Obat"),
      ),
      body: FutureBuilder(
        future: apiService.getObat(),
        builder: (BuildContext context, AsyncSnapshot<List<Obat>> snapshot) {
          if (snapshot.hasError) {
            return Center(
              child: Text(
                  "Something wrong with message: ${snapshot.error.toString()}"),
            );
          } else if (snapshot.connectionState == ConnectionState.done) {
            List<Obat> obat = snapshot.data;
            return _buildListView(obat);
          } else {
            return Center(
              child: Container(),
            );
          }
        },
      ),
    );
  }

  Widget _buildListView(List<Obat> obat) {
    return ListView.separated(
      separatorBuilder: (BuildContext context, int i) =>
          Divider(color: Colors.grey[400]),
      itemCount: obat.length,
      itemBuilder: (context, index) {
        Obat user = obat[index];
        return ListTile(
          onTap: () {},
          leading: Icon(Icons.medication),
          title: Text(user.namaobat),
          subtitle: Text(capitalize(user.kategori)),
          trailing: SingleChildScrollView(
            child: Column(
              mainAxisAlignment: MainAxisAlignment.spaceAround,
              children: <Widget>[Text(user.stok.toUpperCase())],
            ),
          ),
        );
      },
    );
  }
}
