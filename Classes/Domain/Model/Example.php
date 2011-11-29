<?php
namespace F2\Search\Domain\Model;
use TYPO3\FLOW3\Annotations as FLOW3;
use F2\Search\Annotations as F2;
use Doctrine\ORM\Mapping as ORM;
use \F2\Base\Service\Index\IndexableModel;
/**
 * An Example
 *
 * @FLOW3\Scope("prototype")
 * @FLOW3\Entity
 * @F2\Index(defaultField="texto")
 */
class Pregunta implements IndexableModel {

	/**
	 * Date
	 *
     * @F2\Index(type="date")
	 * @var \DateTime
	 */
	protected $fecha;

	/**
	 * El texto
     * @F2\Index(type="text")
	 * @FLOW3\Validate(type="\F2\Base\Validation\NumberOfWordsValidator",options={"max"=150})
	 * @ORM\Column(type="text")
	 * @var string
	 */
	protected $texto;

	/**
	 * Nombre del autor
	 * @var string
	 * @ORM\Column(length=80,nullable=true)
	 */
	protected $nombre;

	/**
	 * Email del autor
	 * @var string
	 * @FLOW3\Validate(type="EmailAddress")
	 * @ORM\Column(length=80)
	 */
	protected $email;


	public function __construct($texto) {
		$this->setTexto($texto);
		$this->setFecha(new \DateTime());
	}

	/**
	 * @param string $email
	 */
	public function setEmail($email) {
		$this->email = $email;
	}

	/**
	 * @return string
	 */
	public function getEmail() {
		return $this->email;
	}

	/**
	 * @param \DateTime $fecha
	 */
	public function setFecha($fecha) {
		$this->fecha = $fecha;
	}

	/**
	 * @return \DateTime
	 */
	public function getFecha() {
		return $this->fecha;
	}

	/**
	 * @param string $nombre
	 */
	public function setNombre($nombre) {
		$this->nombre = $nombre;
	}

	/**
	 * @return string
	 */
	public function getNombre() {
		return $this->nombre;
	}


	/**
	 * @throws \F2\TuitLawyer\Exception\TuitLawyerException
	 * @param string $texto
	 * @return void
	 */
	public function setTexto($texto) {
		$this->texto = $texto;
	}

	/**
	 * @return string
	 */
	public function getTexto() {
		return $this->texto;
	}

    public function getIdentifier() {
        return $this->FLOW3_Persistence_Identifier;
    }
}
?>