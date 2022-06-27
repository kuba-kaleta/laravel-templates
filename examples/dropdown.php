<?php

function checkSelected($fieldValue, $selectName)
{
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if ($fieldValue == $_POST[$selectName]) echo ' selected';
    }
}

?>

<section class="reservation-page">
  <form method="POST">
    <label> Wybierz film:</label>
    <select id="movie" name="resFilm">
      <option selected disabled>--Wybierz film--</option>
      <option value="BUZZ ASTRAL" <?php checkSelected('BUZZ ASTRAL', 'resFilm'); ?>>BUZZ ASTRAL</option>
      <option value="ELVIS" <?php checkSelected('ELVIS', 'resFilm'); ?>>ELVIS</option>
      <option value="JURASSIC WORLD: DOMINION"<?php checkSelected('JURASSIC WORLD: DOMINION', 'resFilm'); ?>>JURASSIC WORLD: DOMINION</option>
      <option value="CZARNY TELEFON" <?php checkSelected('CZARNY TELEFON', 'resFilm'); ?>>CZARNY TELEFON</option>
      <option value="TOP GUN: MAVERICK" <?php checkSelected('TOP GUN: MAVERICK', 'resFilm'); ?>>TOP GUN: MAVERICK</option>
      <option value="JEŻYK I PRZYJACIELE" <?php checkSelected('JEŻYK I PRZYJACIELE', 'resFilm'); ?>>JEŻYK I PRZYJACIELE</option>
      <option value="DOKTOR STRANGE W MULTIWERSUM OBŁĘDU" <?php checkSelected('DOKTOR STRANGE W MULTIWERSUM OBŁĘDU', 'resFilm'); ?>>DOKTOR STRANGE W MULTIWERSUM OBŁĘDU</option>
      <option value="SONIC 2 SZYBKI JAK BŁYSKAWICA" <?php checkSelected('SONIC 2 SZYBKI JAK BŁYSKAWICA', 'resFilm'); ?>>SONIC 2. SZYBKI JAK BŁYSKAWICA</option>
      <option value="ŻYWY" <?php checkSelected('SONIC 2 SZYBKI JAK BŁYSKAWICA', 'resFilm'); ?>>ŻYWY</option>
    </select><br>
    <label> Wybierz dzień:</label>
    <select id="day" name="resDay" onchange="populate(this.id, 'hour')">
      <option selected disabled>--Wybierz dzień--</option>
      <option value="Poniedzialek" <?php checkSelected('Poniedzialek', 'resDay'); ?>>Poniedziałek</option>
      <option value="Wtorek" <?php checkSelected('Wtorek', 'resDay'); ?>>Wtorek</option>
      <option value="Sroda" <?php checkSelected('Sroda', 'resDay'); ?>>Środa</option>
      <option value="Czwartek" <?php checkSelected('Czwartek', 'resDay'); ?>>Czwartek</option>
      <option value="Piatek" <?php checkSelected('Piatek', 'resDay'); ?>>Piątek</option>
      <option value="Sobota" <?php checkSelected('Sobota', 'resDay'); ?>>Sobota</option>
      <option value="Niedziela" <?php checkSelected('Niedziela', 'resDay'); ?>>Niedziela</option>
    </select><br>
    <label> Wybierz godzine:</label>
    <select id="hour" name="resHour">
      <option selected disabled>--Wybierz godzinę--</option>
    </select>
    <script>
      function populate(day, hour) {
        var day = document.getElementById(day);
        var hour = document.getElementById(hour);

        hour.innerHTML = "";

        if (day.value == "Poniedzialek" || day.value == "Sroda" || day.value == "Piatek" || day.value == "Niedziela") {
          var optionArray = ['14:00|14:00', '20:00|20:00'];
        } else if ((day.value == "Wtorek" || day.value == "Czwartek" || day.value == "Sobota")) {
          var optionArray = ['17:00|17:00', '23:00|23:00'];
        }

        // var i = 0;
        for (var option in optionArray) {
          var pair = optionArray[option].split("|");
          var newoption = document.createElement("option");

          newoption.value = pair[0];
          newoption.innerHTML = pair[1];
          /* if(i == 0){
            newoption.selected = true;
            newoption.defaultSelected = true;
          }
          i = i + 1; */
          hour.options.add(newoption);
        }
      }
    </script><br>
    <button type="submit" name="free-seats">Zapisz</button>
  </form>
</section>