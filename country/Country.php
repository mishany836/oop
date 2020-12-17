<?php
namespace country;

class Country
{
public $listTown = [];

    /**
     * Country constructor.
     * @param array $listTown
     */
    public function __construct()
    {
        if (!empty($_SESSION['country'])){
            foreach ($_SESSION['country'] as $item){
                $this->listTown = unserialize($item);
            }
        }

    }
public function addTown(Town $town)
{
    $this->listTown[] = $town;
    $_SESSION['country'][]= serialize($town);
}
  public function getCountryList()
  {
      echo '<div>';
          foreach ($this->listTown as $country) {
              echo '<p> Название : ' . $country->name . '</p>';
              echo '<p> Год основания : ' . $country->foundation . '</p>';
              echo '<p> Численность населения : ' . $country->population . '</p>';
              echo '<br><hr></br>';

          }
          echo '</div>';
      }

}