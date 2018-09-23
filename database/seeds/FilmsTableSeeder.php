<?php

use Illuminate\Database\Seeder;

class FilmsTableSeeder extends Seeder {
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run() {
    $table = DB::table('films');
    $now = new DateTime();


    //Blade Runner 2049
    $table->insert([
      'name'          => "Blade Runner 2049",
      'slug'          => 'blade-runner-2049',
      'description'   => "A young blade runner's discovery of a long-buried secret leads him to track down former blade runner Rick Deckard, who's been missing for thirty years.",
      'realease_date' => '2017-10-05',
      'rating'        => 1,
      'ticket_price'  => 5.35,
      'country_id'    => $this->getCountry('uk')->id,
      'genre_id'      => $this->getGenre('sci-fi')->id,
      'photo_id'      => $this->uploadPhoto('blade-runner-2049.jpg')->id,
      'created_at'    => $now,
    ]);

    //Dunkirk
    $table->insert([
      'name'          => "Dunkirk",
      'slug'          => "dunkirk-2017",
      'description'   => "Allied soldiers from Belgium, the British Empire and France are surrounded by the German Army, and evacuated during a fierce battle in World War II.",
      'realease_date' => '2017-07-19',
      'rating'        => 1,
      'ticket_price'  => 3.20,
      'country_id'    => $this->getCountry('fr')->id,
      'genre_id'      => $this->getGenre('drama')->id,
      'photo_id'      => $this->uploadPhoto('dunkirk.jpg')->id,
      'created_at'    => $now,
    ]);

    //Logan
    $table->insert([
      'name'          => "Logan",
      'slug'          => "logan-2017",
      'description'   => "In the near future, a weary Logan cares for an ailing Professor X, somewhere on the Mexican border. However, Logan's attempts to hide from the world, and his legacy, are upended when a young mutant arrives, pursued by dark forces.",
      'realease_date' => '2017-03-02',
      'rating'        => 3,
      'ticket_price'  => 4.20,
      'country_id'    => $this->getCountry('us')->id,
      'genre_id'      => $this->getGenre('action')->id,
      'photo_id'      => $this->uploadPhoto('logan.jpg')->id,
      'created_at'    => $now,
    ]);


  }

  /**
   * @param string $countryCode
   * @return \App\Country
   */
  private function getCountry(string $countryCode) {
    return \App\Country::where('code', '=', $countryCode)->firstOrFail();
  }

  /**
   * @param string $genreSlug
   * @return \App\Genre
   */
  private function getGenre(string $genreSlug) {
    return \App\Genre::where('slug', '=', $genreSlug)->firstOrFail();
  }

  /**
   * @param $filename
   * @return \App\Image
   */
  private function uploadPhoto($filename) {


    $ext = mb_strtolower(pathinfo($filename, PATHINFO_EXTENSION));
    $name = uniqid() . ".$ext";
    $imagePath = "/uploads/$name";

    $from = base_path("/films-seeder/images/$filename");
    $dest = public_path($imagePath);

    File::copy($from, $dest);

    $image = new \App\Image();
    $image->path = $imagePath;
    $image->save();

    return $image;
  }

}
