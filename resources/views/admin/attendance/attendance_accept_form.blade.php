<form action="{{ route('admin.attendance.report.status', ['id' => $id, 'status' => 'hr_approved']) }}" method="post">
    @csrf
    <div class="mb-3">
        <label for="accept_message" class="eForm-label">{{get_phrase('Message')}} <small>({{get_phrase('Optional')}})</small></label>
        <textarea class="form-control eForm-control" name="message" id="accept_message" rows="5"></textarea>
    </div>

    <div class="mb-3">
        <button type="submit" class="btn-form mt-2 mb-3">{{get_phrase('Confirm')}}</button>
    </div>
</form>