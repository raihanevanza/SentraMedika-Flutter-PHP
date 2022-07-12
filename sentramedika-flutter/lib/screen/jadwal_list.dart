import 'package:flutter/material.dart';
import 'package:sentramedika/model/jadwal.dart';
import 'package:sentramedika/screen/jadwal_detail.dart';
import 'package:sentramedika/service/jadwal_service.dart';
import 'package:sentramedika/util/capitalize.dart';
// import 'package:cached_network_image/cached_network_image.dart';

class ListJadwal extends StatefulWidget {
  @override
  _ListJadwalState createState() => _ListJadwalState();
}

class _ListJadwalState extends State<ListJadwal> {
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
        title: Text("Jadwal Dokter"),
      ),
      body: FutureBuilder(
        future: apiService.getJadwal(),
        builder: (BuildContext context, AsyncSnapshot<List<Jadwal>> snapshot) {
          if (snapshot.hasError) {
            return Center(
              child: Text(
                  "Something wrong with message: ${snapshot.error.toString()}"),
            );
          } else if (snapshot.connectionState == ConnectionState.done) {
            List<Jadwal> jadwal = snapshot.data;
            return _buildListView(jadwal);
          } else {
            return Center(
              child: Container(),
            );
          }
        },
      ),
    );
  }

  Widget _buildListView(List<Jadwal> jadwal) {
    return ListView.separated(
      separatorBuilder: (BuildContext context, int i) =>
          Divider(color: Colors.grey[400]),
      itemCount: jadwal.length,
      itemBuilder: (context, index) {
        Jadwal user = jadwal[index];
        return ListTile(
          onTap: () {
            Navigator.push(
                context,
                MaterialPageRoute(
                    builder: (BuildContext context) =>
                        DetailJadwal(id: user.id, key: ValueKey(user.id))));
          },
          leading: Icon(Icons.calendar_today),
          title: Text(user.namadokter),
          subtitle: Text(capitalize(user.spesialis)),
        );
      },
    );
  }
}
