<?php 
namespace App\Services;

use App\Services\ServiceInterface;
use Illuminate\Database\Eloquent\Model;

class BaseService implements ServiceInterface
{
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function getAll()
    {
        return $this->model->all();
    }

    public function find($id)
    {
        return $this->model->find($id);
    }

    public function create(array $data)
    {
        return $this->model->create($data);
    }

    public function update($id, array $data)
    {
        $record = $this->model->find($id);

        if (!$record) {
            return false;
        }

        return $record->update($data);
    }

    public function delete($id)
    {
        $record = $this->model->find($id);

        if (!$record) {
            return false;
        }

        return $record->delete();
    }
}