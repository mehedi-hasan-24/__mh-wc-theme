<?php
/* 
    Template Name: Contact Page Template
 */
get_header(); // Include the header
?>

<body id="main-content" class="max-w-4xl mx-auto p-6">
    <h1 class="text-3xl font-bold mb-4">Contact Us</h1>

    <?php
    // Initialize variables for form input and error messages
    $userName = $email = $message = '';
    $userName_error = $email_error = $message_error = '';
    $success_message = '';
    $show_form = true;

    // Handle form submission
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve and sanitize form data
        $userName = sanitize_text_field($_POST['userName']);
        $email = sanitize_email($_POST['email']);
        $message = sanitize_textarea_field($_POST['message']);
        $has_error = false;

        if (empty($userName)) {
            $userName_error = 'userName is required.';
            $has_error = true;
        }

        if (!is_email($email)) {
            $email_error = 'Invalid email format.';
            $has_error = true;
        }

        if (empty($message)) {
            $message_error = 'Message is required.';
            $has_error = true;
        }

        // Send email if no errors
        if (!$has_error) {
            $show_form = false;
            $to = get_option('admin_email'); // Default admin email
            $subject = "Contact Form Submission from $userName";
            $body = "userName: $userName\nEmail: $email\n\nMessage:\n$message";
            $headers = array('Content-Type: text/plain; charset=UTF-8');

            // if (wp_mail($to, $subject, $body, $headers)) {
            //     $success_message = 'Email sent successfully!';
            //     // Clear form fields after successful submission
            //     $userName = $email = $message = '';
            // } else {
            //     $success_message = 'Failed to send email.';
            // }
            $success_message = "EMAIL SENT...";
        }
    }
    ?>

    <!-- Display success message -->
    <?php if ($success_message): ?>
        <div class="mb-4 p-4 bg-green-200 text-green-800 border border-green-300 rounded">
            <?php echo esc_html($success_message); ?>
        </div>
    <?php endif; ?>

    <!-- Display success message -->
    
    <!-- Display form -->
        <form action="" method="post" class="space-y-4" id="contact-form">
            <div>
                <label for="userName" class="block text-lg font-medium text-gray-700">userName:</label>
                <input type="text" id="userName" name="userName" value="<?php echo esc_attr($userName); ?>" 
                    class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                <?php if ($userName_error): ?>
                    <p class="mt-1 text-red-600 text-sm"><?php echo esc_html($userName_error); ?></p>
                <?php endif; ?>
            </div>

            <div>
                <label for="email" class="block text-lg font-medium text-gray-700">Email:</label>
                <input type="email" id="email" name="email" value="<?php echo esc_attr($email); ?>" 
                    class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                <?php if ($email_error): ?>
                    <p class="mt-1 text-red-600 text-sm"><?php echo esc_html($email_error); ?></p>
                <?php endif; ?>
            </div>

            <div>
                <label for="message" class="block text-lg font-medium text-gray-700">Message:</label>
                <textarea id="message" name="message" rows="4" 
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"><?php echo esc_textarea($message); ?></textarea>
                <?php if ($message_error): ?>
                    <p class="mt-1 text-red-600 text-sm"><?php echo esc_html($message_error); ?></p>
                <?php endif; ?>
            </div>

            <div>
                <input type="submit" value="Send" id="submitBtn" onsubmit="disableSubmitButton()"
                    class="bg-indigo-600 text-white py-2 px-4 rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:bg-red-800 disabled:cursor-not-allowed">
            </div>
           
        </form>
        <script>
            const submitForm = document.getElementById('contact-form');
            submitForm.onsubmit = (event)=>{
                document.getElementById("submitBtn").disabled = true;
                
            }
          
    </script>
    
    
    
</body>

<?php
get_footer(); // Include the footer
?>
