<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New User'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="users view content">
            <h3><?= h($user->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($user->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($user->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($user->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Remember Me') ?></th>
                    <td><?= $user->remember_me ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Invoice Service') ?></h4>
                <?php if (!empty($user->invoice_service)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Service Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Service Date') ?></th>
                            <th><?= __('Service Receiver Name') ?></th>
                            <th><?= __('Service Receiver Address') ?></th>
                            <th><?= __('Service Total Before Tax') ?></th>
                            <th><?= __('Service Total Tax') ?></th>
                            <th><?= __('Service Tax Per') ?></th>
                            <th><?= __('Service Total After Tax') ?></th>
                            <th><?= __('Service Amount Paid') ?></th>
                            <th><?= __('Service Total Amount Due') ?></th>
                            <th><?= __('Note') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->invoice_service as $invoiceService) : ?>
                        <tr>
                            <td><?= h($invoiceService->service_id) ?></td>
                            <td><?= h($invoiceService->user_id) ?></td>
                            <td><?= h($invoiceService->service_date) ?></td>
                            <td><?= h($invoiceService->service_receiver_name) ?></td>
                            <td><?= h($invoiceService->service_receiver_address) ?></td>
                            <td><?= h($invoiceService->service_total_before_tax) ?></td>
                            <td><?= h($invoiceService->service_total_tax) ?></td>
                            <td><?= h($invoiceService->service_tax_per) ?></td>
                            <td><?= h($invoiceService->service_total_after_tax) ?></td>
                            <td><?= h($invoiceService->service_amount_paid) ?></td>
                            <td><?= h($invoiceService->service_total_amount_due) ?></td>
                            <td><?= h($invoiceService->note) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'InvoiceService', 'action' => 'view', $invoiceService->service_id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'InvoiceService', 'action' => 'edit', $invoiceService->service_id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'InvoiceService', 'action' => 'delete', $invoiceService->service_id], ['confirm' => __('Are you sure you want to delete # {0}?', $invoiceService->service_id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
