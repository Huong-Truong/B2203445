<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Lopmonhoc Model
 *
 * @property \App\Model\Table\DiemTable&\Cake\ORM\Association\HasMany $Diem
 *
 * @method \App\Model\Entity\Lopmonhoc newEmptyEntity()
 * @method \App\Model\Entity\Lopmonhoc newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Lopmonhoc> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Lopmonhoc get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Lopmonhoc findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Lopmonhoc patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Lopmonhoc> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Lopmonhoc|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Lopmonhoc saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Lopmonhoc>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Lopmonhoc>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Lopmonhoc>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Lopmonhoc> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Lopmonhoc>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Lopmonhoc>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Lopmonhoc>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Lopmonhoc> deleteManyOrFail(iterable $entities, array $options = [])
 */
class LopmonhocTable extends Table
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

        $this->setTable('lopmonhoc');
        $this->setDisplayField('hocki_nk');
        $this->setPrimaryKey('id');

        $this->hasMany('Diem', [
            'foreignKey' => 'lopmonhoc_id',
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
            ->integer('monhoc_id')
            ->requirePresence('monhoc_id', 'create')
            ->notEmptyString('monhoc_id');

        $validator
            ->scalar('hocki_nk')
            ->maxLength('hocki_nk', 50)
            ->requirePresence('hocki_nk', 'create')
            ->notEmptyString('hocki_nk');

        return $validator;
    }
}
