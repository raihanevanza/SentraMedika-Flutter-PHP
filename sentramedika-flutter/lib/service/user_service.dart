import 'package:sentramedika/model/obat.dart';
import 'package:http/http.dart' show Client;

class UserApiService {
  final String baseUrl = "http://192.168.1.4/sentramedika/public/index.php/";
  Client client = Client();

  Future<List<Obat>> getObat() async {
    final response = await client.get("$baseUrl/obatapi");
    if (response.statusCode == 200) {
      return userFromJson(response.body);
    } else {
      return null;
    }
  }
}
