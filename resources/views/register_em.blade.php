@extends('layout')

@section('title', 'register_user')

@section('content')
    <style>
    
        body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 2%;
        }

        legend {
            font-weight: bold;
            font-size: 1.7em;
        }

        h3 {
            margin: 0;
            font-weight: bold;
        }

        .row {
            display: flex;
            justify-content: space-between;
        }

      
        .col-1, .col-2 {
            flex: 1;
            padding: 10px;
        }

 
        .col-1 {
            max-width: 50%;
        }

     
        .col-2 {
            max-width: 45%;
        }

        .mb-3 {
            margin-bottom: 1rem;
        }


        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        
        label.required::after {
            content: "*";
            color: red;
        }

       
        input, select {
            width: 30%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

      
        input[type="radio"] {
            width: auto;
        }

       
        input[type="email"], input[type="url"] {
            width: 80%;
        }

       
        input[type='file']{
            border: none;
        }

        
        select {
            border: none;
            border-bottom: 1px solid #ccc;
            background-color: transparent;
            appearance: none;
        }

       
        button {
            padding: 10px 20px;
            background-color: #3966e4;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

   
        button:hover {
            background-color: #4de7ff;
        }


        .name-row {
            display: flex;
            gap: 10px;
        }

        .name-row input {
            width: 40%;
        }

        .tel-inputs {
            display: flex;
            gap: 5px;
        }


        .tel-inputs input {
            width: 10%;
            padding: 8px;
        }

        .tel-inputs span {
            margin: 0 5px;
        }
    </style>
</head>
<body>
    <form action="#">
        <fieldset>
            <legend>Employment Application</legend>
            <div class="row">
                <div class="col-1">
                   
                    <div class="mb-3">
                        <label class="required">Which position are you applying for?</label>
                        <select class="position" required>
                            <option value="">-choose position-</option>
                            <option value="student">Student</option>
                            <option value="developer">Developer</option>
                            <option value="teacher">Teacher</option>
                        </select>
                    </div>
                    
                    <div class="mb-3">
                        <label class="required">Are you willing to relocate?</label>
                        <input type="radio" name="relocate" value="yes" required> Yes <br>
                        <input type="radio" name="relocate" value="no" required> No
                    </div>
                  
                    <div class="mb-3">
                        <label class="required">When can you start?</label>
                        <input type="date" name="startdate" required>
                    </div>
                    
                    <div class="mb-3">
                        <label>Portfolio Web Site</label>
                        <input type="url" name="website" placeholder="http://">
                    </div>
                
                    <div class="mb-3">
                        <label>Attach a Copy of Your Resume</label>
                        <input type="file" name="resume">
                    </div>
                </div>  
                <div class="col-2">
                    <h3>Your Contact Information</h3>
                   
                    <div class="mb-3">
                        <label class="required">Name</label>
                        <div class="name-row">
                            <input type="text" name="firstname" placeholder="First" required>
                            <input type="text" name="lastname" placeholder="Last" required>
                        </div>
                    </div>
                 
                    <div class="mb-3">
                        <label class="required">Email Address</label>
                        <input type="email" name="email" required>
                    </div>
                  
                    <div class="mb-3">
                        <label class="required">Phone</label>
                        <div class="tel-inputs">
                            <input type="tel" name="area-code" placeholder="###" maxlength="3" required>
                            <span>-</span>
                            <input type="tel" name="prefix" placeholder="###" maxlength="3" required>
                            <span>-</span>
                            <input type="tel" name="line-number" placeholder="####" maxlength="4" required>
                        </div>
                    </div>
                   
                    <button type="submit">Submit</button>
                </div>  
            </div>
        </fieldset>
    </form>
</body>
@endsection