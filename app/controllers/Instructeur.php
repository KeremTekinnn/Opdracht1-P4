<?php

class Instructeur extends BaseController
{
    //Is nu nog leeg
    private $instructeurModel;

    public function __construct()
    {
        $this->instructeurModel = $this->model('InstructeurModel');
    }

    public function index()
    {
        $result = $this->instructeurModel->getInstructeurs();

        $rows = "";
        foreach ($result as $instructeur) {
            $rows .= "<tr>
                            <td>$instructeur->Voornaam</td>
                            <td>$instructeur->Tussenvoegsel</td>                        
                            <td>$instructeur->Achternaam</td>                        
                            <td>$instructeur->Mobiel</td>                        
                            <td>$instructeur->DatumInDienst</td>                         
                            <td>$instructeur->AantalSterren</td>
                                        <td>
                    <a href='Instructeur/index.php?Id=$instructeur->Id'>
                        <img src='img/auto.png' alt='auto'>
                    </a>
                </td>
                          </tr>";
        }

        $data = [
            'title' => 'Instructeurs in dienst',
            'rows'  => $rows
        ];

        $this->view('Instructeur/index', $data);
    }
}
