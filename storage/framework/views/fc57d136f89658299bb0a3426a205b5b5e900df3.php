<div class="container" wire:poll>
    <div class="pt-2 row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Contacts</h3>
                </div>
                <div class="card-body">
                    <ul class="contacts-list">
                        <?php $__currentLoopData = $conversations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $conversation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="<?php echo e($conversation->id === $selectedConversation->id ? 'bg-warning' : ''); ?>">
                            <a href="#" wire:click.prevent="viewMessage( <?php echo e($conversation->id); ?>)">
                                <img class="contacts-list-img" src="<?php echo e($conversation->sender_id === auth()->id() ? $conversation->receiver->avatar_url : $conversation->sender->avatar_url); ?>" alt="User Avatar">
                                <div class="contacts-list-info">
                                    <span class="contacts-list-name text-dark">
                                        <?php if($conversation->sender_id === auth()->id()): ?>
                                            <?php echo e($conversation->receiver->name); ?>

                                        <?php else: ?>
                                            <?php echo e($conversation->sender->name); ?>

                                        <?php endif; ?>
                                        <small class="float-right contacts-list-date text-muted"><?php echo e($conversation->messages->last()?->created_at->format('d/m/Y')); ?></small>
                                    </span>
                                    <span class="contacts-list-msg text-secondary"><?php echo e($conversation->messages->last()?->body); ?></span>
                                </div>
                                <!-- /.contacts-list-info -->
                            </a>
                        </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <!-- End Contact Item -->
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card direct-chat direct-chat-primary">
                <div class="card-header">
                    <h3 class="card-title">Chat with
                        <span>
                            <?php if($conversation->sender_id === auth()->id()): ?>
                                <?php echo e($selectedConversation->receiver->name); ?>

                            <?php else: ?>
                                <?php echo e($selectedConversation->sender->name); ?>

                            <?php endif; ?>
                        </span>
                    </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <!-- Conversations are loaded here -->
                    <div class="direct-chat-messages" id="conversation">
                        <!-- Message. Default to the left -->
                        <?php $__currentLoopData = $selectedConversation->messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="direct-chat-msg <?php echo e($message->user_id === auth()->id() ? 'right' : ''); ?>">
                            <div class="clearfix direct-chat-infos">
                                <span class="float-left direct-chat-name"><?php echo e($message->user->id === auth()->id() ? 'You' : $message->user->name); ?></span>
                                <span class="float-right direct-chat-timestamp"><?php echo e($message->created_at->format('d M h:i a')); ?></span>
                            </div>
                            <!-- /.direct-chat-infos -->
                            <img class="direct-chat-img" src="<?php echo e($message->user->avatar_url); ?>" alt="message user image">
                            <!-- /.direct-chat-img -->
                            <div class="direct-chat-text">
                                <?php echo e($message->body); ?>

                            </div>
                            <!-- /.direct-chat-text -->
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <!-- /.direct-chat-msg -->
                    </div>
                    <!--/.direct-chat-messages-->
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <form wire:submit.prevent="sendMessage" action="#">
                        <div class="input-group">
                            <input wire:model.defer="body" type="text" name="message" placeholder="Type Message ..." class="form-control">
                            <span class="input-group-append">
                                <button type="submit" class="btn btn-primary">Send</button>
                            </span>
                        </div>
                    </form>
                </div>
                <!-- /.card-footer-->
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\Personal\Documents\Proyectos\repuestos\resources\views/livewire/admin/messages/list-conversation-and-messages.blade.php ENDPATH**/ ?>