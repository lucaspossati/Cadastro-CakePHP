<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\Entity;

/**
 * Usuario Entity
 *
 * @property int $id
 * @property string $nome
 * @property string|null $email
 * @property string $senha
 * @property int $roles_id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Role $role
 */
class Usuario extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'nome' => true,
        'email' => true,
        'senha' => true,
        'roles_id' => true,
        'created' => true,
        'modified' => true,
        'role' => true,
    ];
    
    protected $_hidden = [
        'senha'
    ];
        


    protected function _setSenha($senha){
        if (strlen($senha) > 0){
            return (new DefaultPasswordHasher)-> hash($senha);
        }
    }
}
