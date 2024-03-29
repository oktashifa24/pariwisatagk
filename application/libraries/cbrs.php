<?php

class Cbrs {
    private $num_docs = 0;
    private $corpus_terms = array();
    private $doc_weight = array();
    private $docs = array();

    public function showDocs($doc) {
        $jumlah_doc = count($doc);
        for ($i = 0; $i < $jumlah_doc; $i++) {
            echo "Dokumen ke-$i : $doc[$i] <br /><br />";
        }
    }

    public function createIndex($d) {
        $this->docs = $d;
        $this->num_docs = count($d);
        foreach ($d as $k => $dv) {
            $doc_terms = explode(" ", $dv);

            $num_terms = count($doc_terms);
            for ($j = 0; $j < $num_terms; $j++) {
                $term = strtolower($doc_terms[$j]);
                $this->corpus_terms[$term][] = array($k, $j);
            }
        }
    }

    public function showIndex() {
        ksort($this->corpus_terms);
        foreach ($this->corpus_terms as $term => $doc_locations) {
            echo "<b>$term:</b>";
            echo "<br />";
            foreach ($doc_locations as $doc_location) {
                echo "{" . $doc_location[0] . ", " . $doc_location[1] . "} ";
                echo "<br />";
            }
        }
    }

    public function df($term) {
        $d = array();
        $tr = $this->corpus_terms[$term];
        foreach ($tr as $t) {
            $d[] = $t[0];
        }

        $dx = array_unique($d);
        return count($dx);
    }

    public function idf() {
        $ndf = [];
        foreach ($this->corpus_terms as $t => $terms) {
            $df = $this->df($t);
            $ddf = $this->num_docs / $this->df($t);
            $idf = round(log10($ddf), 4);

            $ndf[$t][0] = $df;
            $ndf[$t][1] = $idf;
        }

        return $ndf;
    }

    public function weight() {
        $ndw = [];
        foreach ($this->docs as $k => $d) {
            $dterm = explode(" ", $d);
            $dx = array_count_values($dterm);
            foreach ($this->idf() as $t => $terms) {
                if (empty($dx[$t])) {
                    $ndw[$k][$t] = 0;
                } else {
                    $ndw[$k][$t] = $dx[$t] * $terms[1];
                }
            }
        }
        $this->doc_weight = $ndw;
        return $ndw;
    }

    public function search($keyword) {
        $key = explode(" ", $keyword);
        $score = [];
        $i = 0;
        foreach ($this->doc_weight as $ndw => $w) {
            $score[$ndw] = 0;
            foreach ($w as $wg => $v) {
                foreach ($key as $k) {
                    if ($k == $wg) {
                        $score[$ndw] += $v;
                    }
                }
            }
            $i++;
        }

        arsort($score);
        return $score;
    }

    public function similarity($d1) {
        $score = [];
        foreach ($this->doc_weight as $ndw => $w) {
            $score[$ndw] = $this->cosim($d1, $ndw);
        }

        arsort($score);
        return $score;
    }

    private function cosim($d1, $d2) {
        $dw = $this->doc_weight;

        $dw1 = $dw[$d1];
        $dw2 = $dw[$d2];

        $dx = 0;
        $dx1 = 0;
        $dx2 = 0;

        foreach ($this->corpus_terms as $t => $terms) {
            $dx += $dw1[$t] * $dw2[$t];
            $dx1 += $dw1[$t] * $dw1[$t];
            $dx2 += $dw2[$t] * $dw2[$t];
        }

        return round($dx / (sqrt($dx1) * sqrt($dx2)), 4);
    }
}
