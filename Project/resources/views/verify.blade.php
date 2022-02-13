<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <style>
      .wf-force-outline-none[tabindex="-1"]:focus {
        outline: none;
      }
    </style>
    <meta charset="utf-8" />
    <title>SITC Certificate Verification</title>
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <link
      href={{ URL::asset('main.css'); }} 
      rel="stylesheet"
      type="text/css"
    />
    <link rel="icon" href="#" sizes="32x32">
    <link rel="icon" href="#" sizes="192x192">
    <link rel="apple-touch-icon" href="#">
  </head>
  <body>
    <div class="section wf-section">
      <img
        src="https://cdn.pixabay.com/photo/2020/08/05/13/07/eco-5465409_1280.png"
        loading="lazy"
        alt=""
        class="image"
        width="250"
      />
      <h1 class="heading">Verify Your Certificate</h1>
      <p class="paragraph">
        Enter the "Certificate ID"
        of your certificate and click the "Verify"&nbsp;button.
      </p>
      <div class="form-block w-form">
        <form
          id="s-form"
          name="s-form"
          method="get"
          class="form"
          aria-label="Search Form"
        >
          <input
            type="text"
            class="text-field w-input"
            maxlength="256"
            name="search"
            placeholder="Ex: SITC-12345"
            id="search"
            required=""
          /><input
            type="submit"
            value="VERIFY"
            data-wait="Please wait..."
            class="submit-button w-button"
          />
        </form>
        <div
          class="w-form-done"
          tabindex="-1"
          role="region"
          aria-label="Form success"
        >
          <div>Thank you! Your submission has been received!</div>
        </div>
        <div
          class="w-form-fail"
          tabindex="-1"
          role="region"
          aria-label="Email Form failure"
        >
          <div>Oops! Something went wrong while submitting the form.</div>
        </div>
      </div>
      @isset($certificates)
      <div>
      @if($certificates->count() < 1)
        <h3>The Certificate ID You Entered is Invalid</h3>
      @endif
      @foreach ($certificates as $certificate)
        <h3>Certificate ID:&nbsp;{{ $certificate->certificate_id }}</h3>
        <h3>Student ID:&nbsp;{{ $certificate->st_id }}</h3>
        <h3>Student Name:&nbsp;{{ $certificate->st_name }}</h3>
        <h3>Course Code:&nbsp;{{ $certificate->course_code }}</h3>
        <h3>Course Name:&nbsp;{{ $certificate->course_name }}</h3>
        <h3>Course Period:&nbsp;{{ $certificate->course_period }}</h3>
        <h3>Final Result:&nbsp;{{ $certificate->course_result }}</h3>
      @endforeach
      </div>
      @endisset
    </div>
  </body>
</html>
