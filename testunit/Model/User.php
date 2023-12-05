<?

namespace App\Model;

class User
{
    public int $age;
    public array $films_favoris = [];
    public string $nom;

    /**
     * @param int $age
     * @param string $nom
     */

    public function _construct(int $age, string $nom)
    {
        $this->age = $age;
        $this->nom = $nom;
    }

    public function affichernom(): string 
    {
        return "Je m'appelle " .$this->nom . ".";
    }

    public function afficherAge(): string 
    {
        return "J'ai " .$this->age . "ans.";
    }

    public function ajouterFilmsfavoris(string $films): bool 
    {
        $this->films_favoris[] = $film;
        return true;
    }

    public function supprimerFilmsFavoris(string $films): bool 
    {
        if (!in_array($film, $this->films_favoris)) throw new InvalidArgumentException("Film inconnu: " .$film);
        unset ($this->films_favoris[array_search($film, $this->films_favoris)]);
        return true;
    }
}
?>

