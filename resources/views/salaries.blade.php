<x-layout>
    <form action="/" class="text-center p-5 bg-stone-300">
        <label for="years_of_xp">Years of Experience</label>
        <select name="years_of_xp" d onchange="this.form.submit()">
            <option value="">All</option>
            @foreach ($years_xp_options as $years)
            <option {{ $current_years_xp==$years ? "selected" : "" }} value="{{ $years }}">{{ $years }}</option>
            @endforeach
        </select>
    </form>

    <div class="m-5">
        @livewire('data-table', ['data' => $salaries, 'columns'=>[
        ['name'=> 'Timestamp', 'data-field'=>'timestamp'],
        ['name'=> 'Permission', 'data-field'=>'permission'],
        ['name'=> 'Gender', 'data-field'=>'gender'],
        ['name'=> 'Postal Code', 'data-field'=>'postal_code'],
        ['name'=> 'Education', 'data-field'=>'education'],
        ['name'=> 'Education Institution', 'data-field'=>'education_institution'],
        ['name'=> 'Years of experience', 'data-field'=>'years_of_experience'],
        ['name'=> 'Employment Commitment', 'data-field'=>'employment_commitment'],
        ['name'=> 'Employment Type', 'data-field'=>'employment_type'],
        ['name'=> 'Job Category', 'data-field'=>'job_category'],
        ['name'=> 'Monthly Salary', 'data-field'=>'monthly_salary'],
        ['name'=> 'Job Title', 'data-field'=>'job_title']
        ]])</div>
</x-layout>
