<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DiemTrungBinhTl Model
 *
 * @method \App\Model\Entity\DiemTrungBinhTl newEmptyEntity()
 * @method \App\Model\Entity\DiemTrungBinhTl newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\DiemTrungBinhTl> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DiemTrungBinhTl get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\DiemTrungBinhTl findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\DiemTrungBinhTl patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\DiemTrungBinhTl> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\DiemTrungBinhTl|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\DiemTrungBinhTl saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\DiemTrungBinhTl>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\DiemTrungBinhTl>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\DiemTrungBinhTl>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\DiemTrungBinhTl> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\DiemTrungBinhTl>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\DiemTrungBinhTl>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\DiemTrungBinhTl>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\DiemTrungBinhTl> deleteManyOrFail(iterable $entities, array $options = [])
 */
class DiemTrungBinhTlTable extends Table
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

        $this->setTable('diem_trung_binh_tl');
        $this->setDisplayField('hoten_sv');
        $this->setPrimaryKey('id');
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
            ->integer('sinhvien_id')
            ->notEmptyString('sinhvien_id');

        $validator
            ->scalar('hoten_sv')
            ->maxLength('hoten_sv', 100)
            ->requirePresence('hoten_sv', 'create')
            ->notEmptyString('hoten_sv');

        $validator
            ->numeric('diem_tich_luy')
            ->allowEmptyString('diem_tich_luy');

        $validator
            ->notEmptyString('so_mon_da_hoc');

        $validator
            ->notEmptyString('so_mon_da_tich_luy');

        $validator
            ->decimal('tong_chi_tl')
            ->allowEmptyString('tong_chi_tl');

        return $validator;
    }
}
