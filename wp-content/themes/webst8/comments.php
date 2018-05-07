<!--必ず #comments というIDを付ける-->
   <div id="comments" class="comment_form">
    <?php if(have_comments()): ?>
    <h1 class="comments-title">Comment</h1>
    <ul class="comments-list">
      <?php wp_list_comments('avatar_size=60'); ?>
    </ul>
    <?php endif; ?>
</div>