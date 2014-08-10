<?php

// These scales are taken from the circle of fifths
$song_scale = array(
  "Major" => array(
    "C",
    "G",
    "D",
    "A",
    "E",
    "B",
    "Gb",
    "F#",
    "Db",
    "Ab",
    "Eb",
    "Bb",
    "F",
  ),
  "Minor" => array(
    "A",
    "E",
    "B",
    "F#",
    "C#",
    "G#",
    "Eb",
    "D#",
    "Bb",
    "F",
    "C",
    "G",
    "D"
  )
);

// This includes theoretical scales
$scales = array(
  // # = sharp, b = flat, ## = double sharp, bb = double flat
  // Major Scales
  "Major" => array(
    "Cb" => array("Cb", "Db", "Eb", "Fb", "Gb", "Ab", "Bb"),
    "C" => array("C", "D", "E", "F", "G", "A", "B"),
    "C#" => array("C#", "D#", "E#", "F#", "G#", "A#", "B#"),
    "Db" => array("Db", "Eb", "F", "Gb", "Ab", "Bb", "C"),
    "D" => array("D", "E", "F#", "G", "A", "B", "C#"),
    "D#" => array("D#", "E#", "F##", "G#", "A#", "B#", "C##"),
    "Eb" => array("Eb", "F", "G", "Ab", "Bb", "C", "D"),
    "E" => array("E", "F#", "G#", "A", "B", "C#", "D#"),
    "E#" => array("E#", "F##", "G##", "A#", "B#", "C##", "D##"),
    "Fb" => array("Fb", "Gb", "Ab", "Bbb", "Cb", "Db", "Eb"),
    "F" => array("F", "G", "A", "Bb", "C", "D", "E"),
    "F#" => array("F#", "G#", "A#", "B", "C#", "D#", "E#"),
    "Gb" => array("Gb", "Ab", "Bb", "Cb", "Db", "Eb", "F"),
    "G" => array("G", "A", "B", "C", "D", "E", "F#"),
    "G#" => array("G#", "A#", "B#", "C#", "D#", "E#", "F##"),
    "Ab" => array("Ab", "Bb", "C", "Db", "Eb", "F", "G"),
    "A" => array("A", "B", "C#", "D", "E", "F#", "G#"),
    "A#" => array("A#", "B#", "C##", "D#", "E#", "F##", "G##"),
    "Bb" => array("Bb", "C", "D", "Eb", "F", "G", "A"),
    "B" => array("B", "C#", "D#", "E", "F#", "G#", "A#"),
    "B#" => array("B#", "C##", "D##", "E#", "F##", "G##", "A##")
  ),
  // Minor Scales
  "Minor" => array(
    "Cb" => array("Cb", "Db", "Ebb", "Fb", "Gb", "Abb", "Bbb"),
    "C" => array("C", "D", "Eb", "F", "G", "Ab", "Bb"),
    "C#" => array("C#", "D#", "E", "F#", "G#", "A", "B"),
    "Db" => array("Db", "Eb", "Fb", "Gb", "Ab", "Bbb", "Cb"),
    "D" => array("D", "E", "F", "G", "A", "Bb", "C"),
    "D#" => array("D#", "E#", "F#", "G#", "A#", "B", "C#"),
    "Eb" => array("Eb", "F", "Gb", "Ab", "Bb", "Cb", "Db"),
    "E" => array("E", "F#", "G", "A", "B", "C", "D"),
    "E#" => array("E#", "F##", "G#", "A#", "B#", "C#", "D#"),
    "Fb" => array("Fb", "Gb", "Abb", "Bbb", "Cb", "Dbb", "Ebb"),
    "F" => array("F", "G", "Ab", "Bb", "C", "Db", "Eb"),
    "F#" => array("F#", "G#", "A", "B", "C#", "D", "E"),
    "Gb" => array("Gb", "Ab", "Bbb", "Cb", "Db", "Ebb", "Fb"),
    "G" => array("G", "A", "Bb", "C", "D", "Eb", "F"),
    "G#" => array("G#", "A#", "B", "C#", "D#", "E", "F#"),
    "Ab" => array("Ab", "Bb", "Cb", "Db", "Eb", "Fb", "Gb"),
    "A" => array("A", "B", "C", "D", "E", "F", "G"),
    "A#" => array("A#", "B#", "C#", "D#", "E#", "F#", "G#"),
    "Bb" => array("Bb", "C", "Db", "Eb", "F", "Gb", "Ab"),
    "B" => array("B", "C#", "D", "E", "F#", "G", "A"),
    "B#" => array("B#", "C##", "D#", "E#", "F##", "G#", "A#")
  )
);

$chord_progression_pattern = array(
  // lower case i = minor, upper case I = major, * = diminished
  "Major" => array("I", "ii", "iii", "IV", "V", "vi", "vii*"),
  "Minor" => array("i", "ii*", "III", "iv", "v", "VI", "VII")
);

$chord_tables = array(
  // Chord -> Root, Major third, Perfect fifth
  "Major" => array(
    "Cb" => array($scales["Major"]["Cb"][0],
                  $scales["Major"]["Cb"][2],
                  $scales["Major"]["Cb"][4]),
    "C"  => array($scales["Major"]["C"][0],
                  $scales["Major"]["C"][2],
                  $scales["Major"]["C"][4]),
    "C#" => array($scales["Major"]["C#"][0],
                  $scales["Major"]["C#"][2],
                  $scales["Major"]["C#"][4]),
    "Db" => array($scales["Major"]["Db"][0],
                  $scales["Major"]["Db"][2],
                  $scales["Major"]["Db"][4]),
    "D"  => array($scales["Major"]["D"][0],
                  $scales["Major"]["D"][2],
                  $scales["Major"]["D"][4]),
    "D#" => array($scales["Major"]["D#"][0],
                  $scales["Major"]["D#"][2],
                  $scales["Major"]["D#"][4]),
    "Eb" => array($scales["Major"]["Eb"][0],
                  $scales["Major"]["Eb"][2],
                  $scales["Major"]["Eb"][4]),
    "E"  => array($scales["Major"]["E"][0],
                  $scales["Major"]["E"][2],
                  $scales["Major"]["E"][4]),
    "E#" => array($scales["Major"]["E#"][0],
                  $scales["Major"]["E#"][2],
                  $scales["Major"]["E#"][4]),
    "Fb" => array($scales["Major"]["Fb"][0],
                  $scales["Major"]["Fb"][2],
                  $scales["Major"]["Fb"][4]),
    "F"  => array($scales["Major"]["F"][0],
                  $scales["Major"]["F"][2],
                  $scales["Major"]["F"][4]),
    "F#" => array($scales["Major"]["F#"][0],
                  $scales["Major"]["F#"][2],
                  $scales["Major"]["F#"][4]),
    "Gb" => array($scales["Major"]["Gb"][0],
                  $scales["Major"]["Gb"][2],
                  $scales["Major"]["Gb"][4]),
    "G"  => array($scales["Major"]["G"][0],
                  $scales["Major"]["G"][2],
                  $scales["Major"]["G"][4]),
    "G#" => array($scales["Major"]["G#"][0],
                  $scales["Major"]["G#"][2],
                  $scales["Major"]["G#"][4]),
    "Ab" => array($scales["Major"]["Ab"][0],
                  $scales["Major"]["Ab"][2],
                  $scales["Major"]["Ab"][4]),
    "A"  => array($scales["Major"]["A"][0],
                  $scales["Major"]["A"][2],
                  $scales["Major"]["A"][4]),
    "A#" => array($scales["Major"]["A#"][0],
                  $scales["Major"]["A#"][2],
                  $scales["Major"]["A#"][4]),
    "Bb" => array($scales["Major"]["Bb"][0],
                  $scales["Major"]["Bb"][2],
                  $scales["Major"]["Bb"][4]),
    "B"  => array($scales["Major"]["B"][0],
                  $scales["Major"]["B"][2],
                  $scales["Major"]["B"][4]),
    "B#" => array($scales["Major"]["B#"][0],
                  $scales["Major"]["B#"][2],
                  $scales["Major"]["B#"][4])
  ),
  // Chord -> Root, Minor third, Perfect fifth
  "Minor" => array(
    "Cb" => array($scales["Minor"]["Cb"][0],
                  $scales["Minor"]["Cb"][2],
                  $scales["Minor"]["Cb"][4]),
    "C"  => array($scales["Minor"]["C"][0],
                  $scales["Minor"]["C"][2],
                  $scales["Minor"]["C"][4]),
    "C#" => array($scales["Minor"]["C#"][0],
                  $scales["Minor"]["C#"][2],
                  $scales["Minor"]["C#"][4]),
    "Db" => array($scales["Minor"]["Db"][0],
                  $scales["Minor"]["Db"][2],
                  $scales["Minor"]["Db"][4]),
    "D"  => array($scales["Minor"]["D"][0],
                  $scales["Minor"]["D"][2],
                  $scales["Minor"]["D"][4]),
    "D#" => array($scales["Minor"]["D#"][0],
                  $scales["Minor"]["D#"][2],
                  $scales["Minor"]["D#"][4]),
    "Eb" => array($scales["Minor"]["Eb"][0],
                  $scales["Minor"]["Eb"][2],
                  $scales["Minor"]["Eb"][4]),
    "E"  => array($scales["Minor"]["E"][0],
                  $scales["Minor"]["E"][2],
                  $scales["Minor"]["E"][4]),
    "E#" => array($scales["Minor"]["E#"][0],
                  $scales["Minor"]["E#"][2],
                  $scales["Minor"]["E#"][4]),
    "Fb" => array($scales["Minor"]["Fb"][0],
                  $scales["Minor"]["Fb"][2],
                  $scales["Minor"]["Fb"][4]),
    "F"  => array($scales["Minor"]["F"][0],
                  $scales["Minor"]["F"][2],
                  $scales["Minor"]["F"][4]),
    "F#" => array($scales["Minor"]["F#"][0],
                  $scales["Minor"]["F#"][2],
                  $scales["Minor"]["F#"][4]),
    "Gb" => array($scales["Minor"]["Gb"][0],
                  $scales["Minor"]["Gb"][2],
                  $scales["Minor"]["Gb"][4]),
    "G"  => array($scales["Minor"]["G"][0],
                  $scales["Minor"]["G"][2],
                  $scales["Minor"]["G"][4]),
    "G#" => array($scales["Minor"]["G#"][0],
                  $scales["Minor"]["G#"][2],
                  $scales["Minor"]["G#"][4]),
    "Ab" => array($scales["Minor"]["Ab"][0],
                  $scales["Minor"]["Ab"][2],
                  $scales["Minor"]["Ab"][4]),
    "A"  => array($scales["Minor"]["A"][0],
                  $scales["Minor"]["A"][2],
                  $scales["Minor"]["A"][4]),
    "A#" => array($scales["Minor"]["A#"][0],
                  $scales["Minor"]["A#"][2],
                  $scales["Minor"]["A#"][4]),
    "Bb" => array($scales["Minor"]["Bb"][0],
                  $scales["Minor"]["Bb"][2],
                  $scales["Minor"]["Bb"][4]),
    "B"  => array($scales["Minor"]["B"][0],
                  $scales["Minor"]["B"][2],
                  $scales["Minor"]["B"][4]),
    "B#" => array($scales["Minor"]["B#"][0],
                  $scales["Minor"]["B#"][2],
                  $scales["Minor"]["B#"][4])
  ),
  "Diminished" => array(
    // # = sharp, b = flat, ## = double sharp, bb = double flat
    "C" => array("Cb", "Ebb", "Gbb"),
    "C" => array("C", "Eb", "Gb"),
    "C#" => array("C#", "E", "G"),
    "Db" => array("Db", "Fb", "Abb"),
    "D" => array("D", "F", "Ab"),
    "D#" => array("D#", "F#", "A"),
    "Eb" => array("Eb", "Gb", "Bbb"),
    "E" => array("E", "G", "Bb"),
    "E#" => array("E#", "G#", "B"),
    "Fb" => array("Fb", "Abb", "Cbb"),
    "F" => array("F", "Ab", "Cb"),
    "F#" => array("F#", "A", "C"),
    "Gb" => array("Gb", "Bbb", "Dbb"),
    "G" => array("G", "Bb", "Db"),
    "G#" => array("G#", "B", "D"),
    "Ab" => array("Ab", "Cb", "Ebb"),
    "A" => array("A", "C", "Eb"),
    "A#" => array("A#", "C#", "E"),
    "Bb" => array("Bb", "Db", "Fb"),
    "B" => array("B", "D", "F"),
    "B#" => array("B#", "D#", "F#")
  )
);

$theoretical_notes = array(
  "Double Flats" => array(
    "C" => "Bb",
    "D" => "C",
    "E" => "D",
    "F" => "Eb",
    "G" => "F",
    "A" => "G",
    "B" => "A"
  ),
  "Double Sharps" => array(
    "C" => "D",
    "D" => "E",
    "E" => "F#",
    "F" => "G",
    "G" => "A",
    "A" => "B",
    "B" => "C#"
  ),
  "Enharmonics" => array(
    "E#" => "F",
    "B#" => "C",
    "Fb" => "E",
    "Cb" => "B"
  )
);

?>