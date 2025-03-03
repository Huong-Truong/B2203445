<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Diem Model
 *
 * @property \App\Model\Table\LopmonhocTable&\Cake\ORM\Association\BelongsTo $Lopmonhocs
 * @property \App\Model\Table\SinhvienTable&\Cake\ORM\Association\BelongsTo $Sinhviens
 *
 * @method \App\Model\Entity\Diem newEmptyEntity()
 * @method \App\Model\Entity\Diem newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Diem> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Diem get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Diem findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Diem patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Diem> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Diem|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Diem saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Diem>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Diem>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Diem>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Diem> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Diem>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Diem>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Diem>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Diem> deleteManyOrFail(iterable $entities, array $options = [])
 */
class DiemTable extends Table
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
    
        $this->setTable('diem');
        $this->setDisplayField('diem');
        $this->setPrimaryKey('id');  // Đặt khóa chính là 'id'
    
        $this->belongsTo('Lopmonhocs', [
            'foreignKey' => 'lopmonhoc_id',
            'className' => 'Lopmonhoc',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Sinhviens', [
            'foreignKey' => 'sinhvien_id',
            'className' => 'Sinhvien',
            'joinType' => 'INNER',
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
            ->integer('lopmonhoc_id')
            ->notEmptyString('lopmonhoc_id');

        $validator
            ->integer('sinhvien_id')
            ->notEmptyString('sinhvien_id');

        $validator
            ->scalar('diem')
            ->maxLength('diem', 50)
            ->requirePresence('diem', 'create')
            ->notEmptyString('diem');

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
        $rules->add($rules->existsIn(['lopmonhoc_id'], 'Lopmonhocs'), ['errorField' => 'lopmonhoc_id']);
        $rules->add($rules->existsIn(['sinhvien_id'], 'Sinhviens'), ['errorField' => 'sinhvien_id']);

        return $rules;
    }
}
