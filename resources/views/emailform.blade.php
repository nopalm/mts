                <form action="{{ url('/contact')}}" method="post" class="contactForm">

                    {{ csrf_field() }}

                    <label for="name">Name</label>
                    <input class="form-control" type="text" name="name" placeholder="you name" />
                    
                    <label for="email">Email</label>
                    <input class="form-control" type="email" name="email" placeholder="you email address" />
                    
                    <label for="message">Message</label>
                    <textarea class="form-control" name="message" id="" placeholder="your message" cols="30" rows="10"></textarea>

                    <br><br>

                   <div class="text-center"> <button type="submit" class="btn btn-primary btn-block">Send Message</button></div>
                <form>