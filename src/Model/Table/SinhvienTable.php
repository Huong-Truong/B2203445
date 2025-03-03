<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Sinhvien Model
 *
 * @property \App\Model\Table\DiemTable&\Cake\ORM\Association\HasMany $Diem
 *
 * @method \App\Model\Entity\Sinhvien newEmptyEntity()
 * @method \App\Model\Entity\Sinhvien newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Sinhvien> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Sinhvien get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Sinhvien findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Sinhvien patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Sinhvien> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Sinhvien|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Sinhvien saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Sinhvien>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Sinhvien>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Sinhvien>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Sinhvien> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Sinhvien>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Sinhvien>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Sinhvien>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Sinhvien> deleteManyOrFail(iterable $entities, array $options = [])
 */
class SinhvienTable extends Table
{
    /**
     * Initialize method
     *
     * @param array<string, mixed> $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('sinhvien');
        $this->setDisplayField('hoten_sv');
        $this->setPrimaryKey('id');

        $this->hasMany('Diem', [
            'foreignKey' => 'sinhvien_id',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('hoten_sv')
            ->maxLength('hoten_sv', 100)
            ->requirePresence('hoten_sv', 'create')
            ->notEmptyString('hoten_sv');

        $validator
            ->date('ngaysinh')
            ->allowEmptyDate('ngaysinh');

        $validator
            ->email('email')
            ->allowEmptyString('email')
            ->add('email', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('giotinh')
            ->maxLength('giotinh', 10)
            ->allowEmptyString('giotinh');

        $validator
            ->scalar('sdt')
            ->maxLength('sdt', 13)
            ->allowEmptyString('sdt');

        $validator
            ->scalar('password')
            ->maxLength('password', 50)
            ->requirePresence('password', 'create')
            ->notEmptyString('password');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->isUnique(['email'], ['allowMultipleNulls' => true]), ['errorField' => 'email']);

        return $rules;
    }
}
