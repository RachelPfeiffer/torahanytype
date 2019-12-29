Issue: file upload not saving.
Solution: add use System\Models\File; to the top of the model along with a relation 
public $attachOne = [
        'pdf' => 'System\Models\File'
    ];