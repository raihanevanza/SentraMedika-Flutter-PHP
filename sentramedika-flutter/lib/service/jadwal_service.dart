import 'dart:convert';

import 'package:sentramedika/model/jadwal.dart';
import 'package:http/http.dart' show Client;

class UserApiService {
  final String baseUrl = "http://192.168.1.4/sentramedika/public/index.php/";
  Client client = Client();

  Future<List<Jadwal>> getJadwal() async {
    final response = await client.get("$baseUrl/jadwalapi");
    if (response.statusCode == 200) {
      return userFromJson(response.body);
    } else {
      return null;
    }
  }

  Future<Jadwal> getUserBy(int id) async {
    final response = await client.get("$baseUrl/jadwalapi/getUserBy/$id");
    if (response.statusCode == 200) {
      final data = Jadwal.fromJson(json.decode(response.body));
      return data;
    } else {
      return null;
    }
  }
}
